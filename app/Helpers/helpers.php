<?php

use App\Models\Member;
use App\Models\Page;
use App\Models\MenuLocation;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


function getSettings()
{
    return Setting::pluck('value', 'key')->toArray();
}

// function getmemberbyloc()
// {
//     return Member::where('status', 1)->orderBy('order', 'ASC')->get();
// }

// if (!function_exists('updatesettingmedia')) {
//     function updatesettingmedia($request, $name, $filename)
//     {
//         $image = $request->file($name);
//         if ($image) {
//             $image_new_name = $filename . '-' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
//             $image->move(public_path('storage/setting/'), $image_new_name);

//             $image = '/storage/setting/' . $image_new_name;
//             return $image;
//         } else {
//             return null;
//         }
//     }
// }

// if (!function_exists('deletesettingmedia')) {
//     function deletesettingmedia($image, $old_image, $image_name, $siteSetting, $siteSettings)
//     {
//         $removeFlag = request()->input($image_name . '_removed');

//         if ($image) {
//             removeFile($old_image);
//             $siteSetting[$image_name] = $image;
//         } elseif ($removeFlag) {
//             removeFile($old_image);
//             $siteSetting[$image_name] = null;
//         } else {
//             $siteSetting[$image_name] = $siteSettings[$image_name];
//         }

//         return $siteSetting[$image_name];
//     }
// }


if (!function_exists('make_slug')) {
    function make_slug($string)
    {
        return Str::slug($string);
    }
}


// if (!function_exists('fileUpload')) {
//     function fileUpload($request, $name, $foldername)
//     {
//         if ($request->hasFile($name)) {
//             return $request->file($name)->store($foldername, 'public');
//         }

//         return null;
//     }
// }
// if (!function_exists('removeFile')) {
//     function removeFile(?string $path, string $disk = 'public'): bool
//     {
//         return $path && Storage::disk($disk)->exists($path)
//             ? Storage::disk($disk)->delete($path)
//             : false;
//     }
// }

if (!function_exists('galleryfileUpload')) {
    function galleryfileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $image_new_name = $name . '-' . date('YmdHis') . '.' . $image->getClientOriginalName();
            $image->move(public_path('storage/' . $foldername . '/'), $image_new_name);

            $image = '/storage/' . $foldername . '/' . $image_new_name;

            return $image;
        }
    }
}

if (!function_exists('stripLetters')) {
    function stripLetters($text, $number, $last = "")
    {
        if (!empty($text)) {
            return substr(strip_tags(html_entity_decode($text)), 0, $number) . $last;
        }
    }
}


if (!function_exists('humanFileSize')) {
    function humanFileSize($bytes)
    {
        if ($bytes >= 1073741824) {
            return number_format($bytes / 1073741824, 2) . ' GB';
        }
        if ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        }
        if ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        }
        return $bytes . ' bytes';
    }
}
// if (!function_exists('multiFileUpload')) {
//     function multiFileUpload($request, $name, $foldername)
//     {
//         $paths = [];

//         if ($request->hasFile($name)) {
//             foreach ($request->file($name) as $file) {
//                 $paths[] = $file->store($foldername, 'public');
//             }
//         }

//         return $paths;
//     }
// }
if (! function_exists('fileUpload')) {
    function fileUpload($request, $name, $folder)
    {
        try {
            if ($request->hasFile($name)) {
                $bucket = "brightland-school"; // static bucket name
                $baseUrl = "https://paradises3.sgp1.digitaloceanspaces.com";

                // Determine folder path
                $folderPath = $folder ? trim($folder, '/') : ''; // if folder is passed, use it; else root

                // store file in S3
                $path = $request->file($name)->storePublicly($folderPath, 's3');

                // build full URL
                $fullUrl = rtrim($baseUrl, '/') . '/' . trim($bucket, '/') . '/' . ltrim($path, '/');
                return $fullUrl;
            }

            return null;
        } catch (\Exception $e) {
            return null;
        }
    }
}
if (! function_exists('removeFile')) {
    function removeFile($fileUrl)
    {
        try {
            $bucket = "brightland-school"; // same static bucket name
            $baseUrl = "https://paradises3.sgp1.digitaloceanspaces.com";

            // Remove base URL + bucket from the full file URL to get the relative path
            $prefix = rtrim($baseUrl, '/') . '/' . trim($bucket, '/');
            $path = str_replace($prefix . '/', '', $fileUrl);

            // Delete if exists
            if (Storage::disk('s3')->exists($path)) {
                Storage::disk('s3')->delete($path);
                return true;
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }
}
if (! function_exists('updatesettingmedia')) {
    function updatesettingmedia($request, $name, $foldername)
    {
        if ($image = $request->file($name)) {
            $bucket = "brightland-school"; // static bucket name
            $baseUrl = "https://paradises3.sgp1.digitaloceanspaces.com"; // static base URL

            $imageName = time() . '-' . rand(0, 99) . '-' . $image->getClientOriginalName();

            // Upload to S3
            $path = $image->storeAs(
                $foldername,        // folder (e.g., 'setting')
                $imageName,         // file name
                ['disk' => 's3', 'visibility' => 'public']
            );

            // Build full URL manually (same as in fileUpload)
            $fullUrl = rtrim($baseUrl, '/') . '/' . trim($bucket, '/') . '/' . ltrim($path, '/');

            return $fullUrl;
        }

        return null;
    }
}
if (! function_exists('deletesettingmedia')) {
    function deletesettingmedia($image, $old_image, $image_name, $siteSetting, $siteSettings)
    {
        if ($image) {
            removeFile($old_image);  // delete old image from S3
            $siteSetting[$image_name] = $image;
        } else {
            $siteSetting[$image_name] = $siteSettings[$image_name];
        }

        return $siteSetting[$image_name];
    }
}
if (! function_exists('multiFileUpload')) {
    function multiFileUpload($request, $name, $folder)
    {
        try {
            $urls = [];

            if ($request->hasFile($name)) {
                $bucket  = "brightland-school"; // static bucket name
                $baseUrl = "https://paradises3.sgp1.digitaloceanspaces.com";

                // Normalize folder path
                $folderPath = $folder ? trim($folder, '/') : '';

                foreach ($request->file($name) as $file) {

                    // Store file in DigitalOcean Spaces
                    $path = $file->storePublicly($folderPath, 's3');

                    // Build full public URL
                    $fullUrl = rtrim($baseUrl, '/')
                        . '/'
                        . trim($bucket, '/')
                        . '/'
                        . ltrim($path, '/');

                    $urls[] = $fullUrl;
                }
            }

            return $urls;
        } catch (\Exception $e) {
            return [];
        }
    }
}
