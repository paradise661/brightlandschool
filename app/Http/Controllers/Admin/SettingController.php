<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Session;
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
        $service_image = updatesettingmedia($request, 'service_image', 'service_image');
        // add new images for pages from here

        $quote_image = updatesettingmedia($request, 'quote_image', 'setting');
        $testimonials_image = updatesettingmedia($request, 'testimonials_image', 'setting');
        $quote_formimage = updatesettingmedia($request, 'quote_formimage', 'setting');
        $abroad_quoteimage = updatesettingmedia($request, 'abroad_quoteimage', 'setting');
        $service_quoteimage = updatesettingmedia($request, 'service_quoteimage', 'setting');
        $blog_quoteimage = updatesettingmedia($request, 'blog_quoteimage', 'setting');
        $site_footer_logo = updatesettingmedia($request, 'site_footer_logo', 'setting');
        $about_image_1 = updatesettingmedia($request, 'about_image_1', 'setting');
        $about_image_2 = updatesettingmedia($request, 'about_image_2', 'setting');
        $about_image_3 = updatesettingmedia($request, 'about_image_3', 'setting');
        $about_image_4 = updatesettingmedia($request, 'about_image_4', 'setting');
        $site_breadcrumb_banner = updatesettingmedia($request, 'site_breadcrumb_banner', 'setting');
        $approved_footer_banner = updatesettingmedia($request, 'approved_footer_banner', 'setting');
        $proud_member_footer_banner = updatesettingmedia($request, 'proud_member_footer_banner', 'setting');

        // end of added new files
        $contact_image = updatesettingmedia($request, 'contact_image', 'contact');
        $blog_image = updatesettingmedia($request, 'blogs_image', 'blog');
        $member_image = updatesettingmedia($request, 'member_image', 'member');

        $abroads_image = updatesettingmedia($request, 'abroads_image', 'abroads');

        $review_image = updatesettingmedia($request, 'review_image', 'review');

        $about_second_image = updatesettingmedia($request, 'about_second_image', 'about');

        $siteSetting['site_main_logo'] = deletesettingmedia($site_main_logo, $siteSettings['site_main_logo'], 'site_main_logo', $siteSetting, $siteSettings);


        $siteSetting['site_fav_icon'] = deletesettingmedia($site_fav_icon, $siteSettings['site_fav_icon'], 'site_fav_icon', $siteSetting, $siteSettings);


        $siteSetting['service_image'] = deletesettingmedia($service_image, $siteSettings['service_image'], 'service_image', $siteSetting, $siteSettings);


        // start added from here
        // $siteSetting['testpreperation_image'] = deletesettingmedia($test_image, $siteSettings['testpreperation_image'], 'testpreperation_image', $siteSetting, $siteSettings);
        $siteSetting['quote_image'] = deletesettingmedia($quote_image, $siteSettings['quote_image'], 'quote_image', $siteSetting, $siteSettings);
        $siteSetting['testimonials_image'] = deletesettingmedia($testimonials_image, $siteSettings['testimonials_image'], 'testimonials_image', $siteSetting, $siteSettings);
        $siteSetting['quote_formimage'] = deletesettingmedia($quote_formimage, $siteSettings['quote_formimage'], 'quote_formimage', $siteSetting, $siteSettings);
        $siteSetting['abroad_quoteimage'] = deletesettingmedia($abroad_quoteimage, $siteSettings['abroad_quoteimage'], 'abroad_quoteimage', $siteSetting, $siteSettings);
        $siteSetting['service_quoteimage'] = deletesettingmedia($service_quoteimage, $siteSettings['service_quoteimage'], 'service_quoteimage', $siteSetting, $siteSettings);
        $siteSetting['blog_quoteimage'] = deletesettingmedia($blog_quoteimage, $siteSettings['blog_quoteimage'], 'blog_quoteimage', $siteSetting, $siteSettings);
        $siteSetting['site_footer_logo'] = deletesettingmedia($site_footer_logo, $siteSettings['site_footer_logo'], 'site_footer_logo', $siteSetting, $siteSettings);
        $siteSetting['about_image_1'] = deletesettingmedia($about_image_1, $siteSettings['about_image_1'], 'about_image_1', $siteSetting, $siteSettings);
        $siteSetting['about_image_2'] = deletesettingmedia($about_image_2, $siteSettings['about_image_2'], 'about_image_2', $siteSetting, $siteSettings);
        $siteSetting['about_image_3'] = deletesettingmedia($about_image_3, $siteSettings['about_image_3'], 'about_image_3', $siteSetting, $siteSettings);
        $siteSetting['about_image_4'] = deletesettingmedia($about_image_4, $siteSettings['about_image_4'], 'about_image_4', $siteSetting, $siteSettings);
        $siteSetting['site_breadcrumb_banner'] = deletesettingmedia($site_breadcrumb_banner, $siteSettings['site_breadcrumb_banner'], 'site_breadcrumb_banner', $siteSetting, $siteSettings);
        $siteSetting['approved_footer_banner'] = deletesettingmedia($approved_footer_banner, $siteSettings['approved_footer_banner'], 'approved_footer_banner', $siteSetting, $siteSettings);
        $siteSetting['proud_member_footer_banner'] = deletesettingmedia($proud_member_footer_banner, $siteSettings['proud_member_footer_banner'], 'proud_member_footer_banner', $siteSetting, $siteSettings);


        // end of new added files

        $siteSetting['contact_image'] = deletesettingmedia($contact_image, $siteSettings['contact_image'], 'contact_image', $siteSetting, $siteSettings);


        $siteSetting['blogs_image'] = deletesettingmedia($blog_image, $siteSettings['blogs_image'], 'blogs_image', $siteSetting, $siteSettings);


        $siteSetting['member_image'] = deletesettingmedia($member_image, $siteSettings['member_image'], 'member_image', $siteSetting, $siteSettings);



        // $siteSetting['location_image'] = deletesettingmedia($location_image, $siteSettings['location_image'], 'location_image', $siteSetting, $siteSettings);


        $siteSetting['review_image'] = deletesettingmedia($review_image, $siteSettings['review_image'], 'review_image', $siteSetting, $siteSettings);


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
