<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class SettingController extends Controller
{

    public function edit(Setting $setting)
    {
        $settings = Setting::pluck('value', 'key');
        return view('admin.setting.edit', compact('settings'));
    }


    public function update(Request $request, Setting $setting)
    {
        $siteSettings = Setting::pluck('value', 'key');

        $siteSetting = $request->all();


        $site_main_logo = updatesettingmedia($request, 'site_main_logo', 'main_logo');
        $site_footer_logo = updatesettingmedia($request, 'site_footer_logo', 'site_footer_logo');
        $site_breadcrumb_banner = updatesettingmedia($request, 'site_breadcrumb_banner', 'site_breadcrumb_banner');
        $site_fav_icon = updatesettingmedia($request, 'site_fav_icon', 'fav_logo');

        // add new images for pages from here

        $homepage_about_image = updatesettingmedia($request, 'homepage_about_image', 'homepage_about_image');
        $homepage_about_image1 = updatesettingmedia($request, 'homepage_about_image1', 'homepage_about_image1');
        $homepage_about_image2 = updatesettingmedia($request, 'homepage_about_image2', 'homepage_about_image2');
        $homepage_about_image3 = updatesettingmedia($request, 'homepage_about_image3', 'homepage_about_image3');

        $aboutpage_about_image = updatesettingmedia($request, 'aboutpage_about_image', 'setting');
        $aboutpage_about_image1 = updatesettingmedia($request, 'aboutpage_about_image1', 'setting');
        $aboutpage_about_image2 = updatesettingmedia($request, 'aboutpage_about_image2', 'setting');
        $aboutpage_about_image3 = updatesettingmedia($request, 'aboutpage_about_image3', 'setting');

        $facilitiespage_breadcrum_image = updatesettingmedia($request, 'facilitiespage_breadcrum_image', 'setting');
        $gallery_breadcrum_image = updatesettingmedia($request, 'gallery_breadcrum_image', 'setting');
        $gallery_breadcrum_image1 = updatesettingmedia($request, 'gallery_breadcrum_image1', 'setting');
        $notices_breadcrum_image = updatesettingmedia($request, 'notices_breadcrum_image', 'setting');
        $events_breadcrum_image = updatesettingmedia($request, 'events_breadcrum_image', 'setting');
        $blogs_breadcrum_image = updatesettingmedia($request, 'blogs_breadcrum_image', 'setting');
        $downloads_breadcrum_image = updatesettingmedia($request, 'downloads_breadcrum_image', 'setting');
        $contact_breadcrum_image = updatesettingmedia($request, 'contact_breadcrum_image', 'setting');
        $about_breadcrum_image = updatesettingmedia($request, 'about_breadcrum_image', 'setting');
        $teacher_breadcrum_image = updatesettingmedia($request, 'teacher_breadcrum_image', 'setting');
        $testimonial_breadcrum_image = updatesettingmedia($request, 'testimonial_breadcrum_image', 'setting');
        $admission_breadcrum_image = updatesettingmedia($request, 'admission_breadcrum_image', 'setting');

        // end of added new files

        $siteSetting['site_main_logo'] = deletesettingmedia($site_main_logo, $siteSettings['site_main_logo'], 'site_main_logo', $siteSetting, $siteSettings);
        $siteSetting['site_footer_logo'] = deletesettingmedia($site_footer_logo, $siteSettings['site_footer_logo'], 'site_footer_logo', $siteSetting, $siteSettings);
        $siteSetting['site_fav_icon'] = deletesettingmedia($site_fav_icon, $siteSettings['site_fav_icon'], 'site_fav_icon', $siteSetting, $siteSettings);
        $siteSetting['site_breadcrumb_banner'] = deletesettingmedia($site_breadcrumb_banner, $siteSettings['site_breadcrumb_banner'], 'site_breadcrumb_banner', $siteSetting, $siteSettings);


        // start added from here
        $siteSetting['homepage_about_image'] = deletesettingmedia($homepage_about_image, $siteSettings['homepage_about_image'], 'homepage_about_image', $siteSetting, $siteSettings);
        $siteSetting['homepage_about_image1'] = deletesettingmedia($homepage_about_image1, $siteSettings['homepage_about_image1'], 'homepage_about_image1', $siteSetting, $siteSettings);
        $siteSetting['homepage_about_image2'] = deletesettingmedia($homepage_about_image2, $siteSettings['homepage_about_image2'], 'homepage_about_image2', $siteSetting, $siteSettings);
        $siteSetting['homepage_about_image3'] = deletesettingmedia($homepage_about_image3, $siteSettings['homepage_about_image3'], 'homepage_about_image3', $siteSetting, $siteSettings);

        $siteSetting['aboutpage_about_image'] = deletesettingmedia($aboutpage_about_image, $siteSettings['aboutpage_about_image'], 'aboutpage_about_image', $siteSetting, $siteSettings);
        $siteSetting['aboutpage_about_image1'] = deletesettingmedia($aboutpage_about_image1, $siteSettings['aboutpage_about_image1'], 'aboutpage_about_image1', $siteSetting, $siteSettings);
        $siteSetting['aboutpage_about_image2'] = deletesettingmedia($aboutpage_about_image2, $siteSettings['aboutpage_about_image2'], 'aboutpage_about_image2', $siteSetting, $siteSettings);
        $siteSetting['aboutpage_about_image3'] = deletesettingmedia($aboutpage_about_image3, $siteSettings['aboutpage_about_image3'], 'aboutpage_about_image3', $siteSetting, $siteSettings);


        $siteSetting['facilitiespage_breadcrum_image'] = deletesettingmedia($facilitiespage_breadcrum_image, $siteSettings['facilitiespage_breadcrum_image'], 'facilitiespage_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['gallery_breadcrum_image'] = deletesettingmedia($gallery_breadcrum_image, $siteSettings['gallery_breadcrum_image'], 'gallery_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['gallery_breadcrum_image1'] = deletesettingmedia($gallery_breadcrum_image1, $siteSettings['gallery_breadcrum_image1'], 'gallery_breadcrum_image1', $siteSetting, $siteSettings);
        $siteSetting['notices_breadcrum_image'] = deletesettingmedia($notices_breadcrum_image, $siteSettings['notices_breadcrum_image'], 'notices_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['events_breadcrum_image'] = deletesettingmedia($events_breadcrum_image, $siteSettings['events_breadcrum_image'], 'events_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['blogs_breadcrum_image'] = deletesettingmedia($blogs_breadcrum_image, $siteSettings['blogs_breadcrum_image'], 'blogs_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['downloads_breadcrum_image'] = deletesettingmedia($downloads_breadcrum_image, $siteSettings['downloads_breadcrum_image'], 'downloads_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['contact_breadcrum_image'] = deletesettingmedia($contact_breadcrum_image, $siteSettings['contact_breadcrum_image'], 'contact_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['about_breadcrum_image'] = deletesettingmedia($about_breadcrum_image, $siteSettings['about_breadcrum_image'], 'about_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['teacher_breadcrum_image'] = deletesettingmedia($teacher_breadcrum_image, $siteSettings['teacher_breadcrum_image'], 'teacher_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['testimonial_breadcrum_image'] = deletesettingmedia($testimonial_breadcrum_image, $siteSettings['testimonial_breadcrum_image'], 'testimonial_breadcrum_image', $siteSetting, $siteSettings);
        $siteSetting['admission_breadcrum_image'] = deletesettingmedia($admission_breadcrum_image, $siteSettings['admission_breadcrum_image'], 'admission_breadcrum_image', $siteSetting, $siteSettings);

        // end of new added files




        foreach ($siteSetting as $key => $value) {
            $setting->updateOrCreate(['key' => $key,], [
                'key' => $key,
                'value' => $value,
            ]);
        }

        Session::flash('success', 'Setting updated successfully');
        return redirect()->back();
    }
}
