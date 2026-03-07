<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'info@brightland.com',
            'password' => Hash::make('Nepal@123'),
        ]);
        // Define settings data
        $settings = [
            ['site_main_logo', null],
            ['site_footer_logo', null],
            ['site_breadcrumb_banner', null],
            ['site_fav_icon', null],
            ['site_information', 'Empowering students with expert guidance for academic success. Your trusted partner in achieving educational goals.'],
            ['site_phone', '021-1234567'],
            ['site_email', 'info@brightland.edu.np'],
            ['site_location', 'Kathmandu, Nepal'],
            ['site_location_url', 'https://paradiseinfo.tech/'],
            ['site_map', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11131.78490171464!2d85.339818!3d27.694685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600%2C%20Nepal!5e1!3m2!1sen!2sus!4v1733377392963!5m2!1sen!2sus'],
            ['site_url', null],
            ['site_copyright', 'Brightland School'],

            ['homepage_about_title', 'Welcome to Brightland Academy'],
            ['homepage_about_title1', 'Where Education Meets Excellence'],
            ['homepage_about_description', 'At Brightland Academy, we are dedicated to providing a nurturing and inspiring learning environment for students of all ages. Our mission is to empower our students with knowledge, skills, and values that will enable them to thrive in an ever-changing world. We believe in fostering creativity, critical thinking, and a love for learning, while also promoting character development and social responsibility. Join us on this educational journey as we strive to shape the leaders of tomorrow.'],
            ['homepage_about_feature', 'World-Class Faculty'],
            ['homepage_about_feature1', 'Modern Infrastructure'],
            ['homepage_about_feature2', 'Holistic Development'],
            ['homepage_about_feature3', 'Global Perspective'],
            ['homepage_about_image', null],
            ['homepage_about_image1', null],
            ['homepage_about_image2', null],
            ['homepage_about_image3', null],
            ['homepage_about_years', '25'],
            ['homepage_about_years_text', 'Years of Excellence'],
            ['homepage_notices_title', 'Important Notices'],
            ['homepage_mission_title', 'Our Foundation'],
            ['homepage_mission_title1', 'Vision, Mission & Values'],
            ['homepage_message_title', 'Leadership'],
            ['homepage_message_title1', 'Messages from Our Leaders'],
            ['homepage_academics_title', 'Academics'],
            ['homepage_academics_title1', 'World-Class Academic Programs'],
            ['homepage_whychoose_title', 'Why Choose Us'],
            ['homepage_whychoose_title1', 'Excellence in Every Aspect'],
            ['homepage_facilities_title', 'Facilities'],
            ['homepage_facilities_title1', 'State-of-the-Art Facilities'],
            ['homepage_blog_title', 'blog'],
            ['homepage_blog_title1', 'Latest Blogs'],
            ['homepage_testimonials_title', 'Testimonials'],
            ['homepage_testimonials_title1', 'What Our Community Says'],
            ['homepage_gallery_title', 'Photo Gallery'],
            ['homepage_gallery_title1', 'Campus Life in Pictures'],
            ['homepage_contact_title', 'Admissions Open 2024-25'],
            ['homepage_contact_title1', 'Join Our Community of Excellence'],
            ['homepage_contact_description', 'Begin your child journey towards academic excellence and holistic development. Limited seats available for all grades.'],
            ['homepage_contact_features', 'Easy Online Application'],
            ['homepage_contact_features1', 'Entrance Assessment'],
            ['homepage_contact_features2', 'Personal Interview'],
            ['homepage_contact_formname', 'Quick Inquiry Form'],


            ['aboutpage_about_title', 'Welcome to Brightland Academy'],
            ['aboutpage_about_title1', 'Where Education Meets Excellence'],
            ['aboutpage_about_description', 'At Brightland Academy, we are dedicated to providing a nurturing and inspiring learning environment for students of all ages. Our mission is to empower our students with knowledge, skills, and values that will enable them to thrive in an ever-changing world. We believe in fostering creativity, critical thinking, and a love for learning, while also promoting character development and social responsibility. Join us on this educational journey as we strive to shape the leaders of tomorrow.'],
            ['aboutpage_about_feature', 'World-Class Faculty'],
            ['aboutpage_about_feature1', 'Modern Infrastructure'],
            ['aboutpage_about_feature2', 'Holistic Development'],
            ['aboutpage_about_feature3', 'Global Perspective'],
            ['aboutpage_about_image', null],
            ['aboutpage_about_image1', null],
            ['aboutpage_about_image2', null],
            ['aboutpage_about_image3', null],
            ['aboutpage_about_years', '25'],
            ['aboutpage_about_years_text', 'Years of Excellence'],


            ['facilitiespage_sport_title', 'Physical Excellence'],
            ['facilitiespage_sport_title1', 'Sports & Recreation Facilities'],
            ['facilitiespage_support_title', 'Student Support'],
            ['facilitiespage_support_title1', 'Support & Wellness Facilities'],
            ['facilitiespage_breadcrum_image', null],
            ['gallery_breadcrum_image', null],
            ['gallery_breadcrum_image1', null],
            ['notices_title', 'Notice Categories'],
            ['notices_breadcrum_image', null],
            ['events_title', 'events Categories'],
            ['events_breadcrum_image', null],
            ['blogs_title', 'blogs Categories'],
            ['blogs_breadcrum_image', null],
            ['downloads_title', 'Downloads Categories'],
            ['downloads_breadcrum_image', null],
            ['contact_form_title', 'Send Us A Message'],
            ['contact_breadcrum_image', null],
            ['contact_map_title', 'Find Us On Map'],
            ['contact_why_title', 'Why Choose Us?'],

            //seo
            ['homepage_seo_keywords', 'Homepage'],
            ['homepage_seo_description', 'Homepage'],
            ['homepage_seo_title', 'Home'],
            ['about_seo_keywords', 'About Us Page'],
            ['about_seo_description', 'About Us page'],
            ['about_seo_title', 'About Us'],
            ['team_seo_keywords', 'Teams Page'],
            ['team_seo_description', 'Our Team Page'],
            ['team_seo_title', 'Our Team'],
            ['testimonial_seo_keywords', 'Testimonial'],
            ['testimonial_seo_description', 'Testimonial'],
            ['testimonial_seo_title', 'Testimonial'],
            ['features_seo_keywords', 'Features'],
            ['features_seo_description', 'Features'],
            ['features_seo_title', 'Features'],
            ['contact_seo_title', 'Contact Us'],
            ['contact_seo_description', 'Contact Us'],
            ['contact_seo_keywords', 'Contact Us'],
            ['contact_seo_schema', 'Contact Us'],
            ['blogs_seo_keywords', 'Abroad Blogs'],
            ['blogs_seo_description', 'Blogs'],
            ['blogs_seo_title', 'Blog'],
            ['blogs_seo_schema', 'Abroad Blogs'],
            ['services_seo_schema', 'Your JSON-LD schema data here'],
            ['homepage_seo_schema', 'Homepage'],
            ['about_seo_schema', 'About Us page'],
            ['team_seo_schema', 'Our Team Page'],
            ['testimonial_seo_schema', 'Testimonial'],
            ['features_seo_schema', 'Features'],
            ['quote_seo_schema', 'Free Quote'],
            ['abroads_seo_schema', 'Study Abroad'],
            ['service_seo_schema', 'Services'],
            ['contact_seo_title', 'Contact Us'],
            ['contact_seo_description', 'Contact Us'],
            ['contact_seo_keywords', 'Contact Us'],
            ['contact_seo_schema', 'Contact Us'],
            ['faqs_seo_title', 'Frequently Asked Questions'],
            ['faqs_seo_description', 'Frequently Asked Questions'],
            ['faqs_seo_keywords', 'Frequently Asked Questions'],
            ['faqs_seo_schema', 'Frequently Asked Questions'],


            ['gallery_seo_title', 'gallery '],
            ['gallery_seo_description', 'gallery '],
            ['gallery_seo_keywords', 'gallery '],
            ['gallery_seo_schema', 'gallery'],
            ['notice_seo_title', 'notice '],
            ['notice_seo_description', 'notice '],
            ['notice_seo_keywords', 'notice '],
            ['notice_seo_schema', 'notice'],
            ['event_seo_title', 'event '],
            ['event_seo_description', 'event '],
            ['event_seo_keywords', 'event '],
            ['event_seo_schema', 'event'],
            ['download_seo_title', 'download '],
            ['download_seo_description', 'download '],
            ['download_seo_keywords', 'download '],
            ['download_seo_schema', 'download'],
            ['admission_seo_title', 'admission '],
            ['admission_seo_description', 'admission '],
            ['admission_seo_keywords', 'admission '],
            ['admission_seo_schema', 'admission'],
            ['about_breadcrum_image', null],
            ['teacher_breadcrum_image', null],
            ['testimonial_breadcrum_image', null],
            ['admission_breadcrum_image', null],







        ];
        // Insert settings data
        foreach ($settings as $item) {
            Setting::create([
                'key' => $item[0],
                'value' => $item[1],
            ]);
        }
    }
}
