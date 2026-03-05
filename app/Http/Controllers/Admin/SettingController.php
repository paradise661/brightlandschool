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

        // end of added new files

        $siteSetting['site_main_logo'] = deletesettingmedia($site_main_logo, $siteSettings['site_main_logo'], 'site_main_logo', $siteSetting, $siteSettings);
        $siteSetting['site_fav_icon'] = deletesettingmedia($site_fav_icon, $siteSettings['site_fav_icon'], 'site_fav_icon', $siteSetting, $siteSettings);


        // start added from here
        $siteSetting['homepage_about_image'] = deletesettingmedia($homepage_about_image, $siteSettings['homepage_about_image'], 'homepage_about_image', $siteSetting, $siteSettings);
        $siteSetting['homepage_about_image1'] = deletesettingmedia($homepage_about_image1, $siteSettings['homepage_about_image1'], 'homepage_about_image1', $siteSetting, $siteSettings);
        $siteSetting['homepage_about_image2'] = deletesettingmedia($homepage_about_image2, $siteSettings['homepage_about_image2'], 'homepage_about_image2', $siteSetting, $siteSettings);
        $siteSetting['homepage_about_image3'] = deletesettingmedia($homepage_about_image3, $siteSettings['homepage_about_image3'], 'homepage_about_image3', $siteSetting, $siteSettings);

        $siteSetting['aboutpage_about_image'] = deletesettingmedia($aboutpage_about_image, $siteSettings['aboutpage_about_image'], 'aboutpage_about_image', $siteSetting, $siteSettings);
        $siteSetting['aboutpage_about_image1'] = deletesettingmedia($aboutpage_about_image1, $siteSettings['aboutpage_about_image1'], 'aboutpage_about_image1', $siteSetting, $siteSettings);
        $siteSetting['aboutpage_about_image2'] = deletesettingmedia($aboutpage_about_image2, $siteSettings['aboutpage_about_image2'], 'aboutpage_about_image2', $siteSetting, $siteSettings);
        $siteSetting['aboutpage_about_image3'] = deletesettingmedia($aboutpage_about_image3, $siteSettings['aboutpage_about_image3'], 'aboutpage_about_image3', $siteSetting, $siteSettings);
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
