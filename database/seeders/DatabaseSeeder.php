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
            'email' => 'test@example.com',
            'password' => Hash::make('Nepal@123'),
        ]);
        // Define settings data
        $settings = [
            ['site_main_logo', null],
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
