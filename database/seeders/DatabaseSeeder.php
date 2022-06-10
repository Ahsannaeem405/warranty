<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Setting;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                 'is_admin'=>'1',
                'password'=> bcrypt('admin'),
        ]);

        Setting::create([
            "id" => "1",
            'site_logo' => 'logo.png',
            'header_background' => 'apm1.webp',
            'section2_background' => 'product-amp.webp',
            // 'section1_heading' => 'Step 1',
            'section1_title' => 'What is SKU?',
            'section1_description' => 'What is SKU?',
            // 'section2_heading' => 'Step 2',
            'section2_title' => 'Search',
            'section2_description' => 'Search',
            // 'section3_heading' => 'Step 3',
            'section3_title' => 'Result',
            'section3_description' => 'Result',
            // 'section4_heading' => 'Step 4',
            'section4_title' => 'What is SKU and Serial Number',
            'section4_description' => 'Finish',
            'section3_head_title' => 'WE ARE A TEAM OF AUDIOHEADS, SOUND ENGINEERS, AND FRIENDS.',
            'section3_head_below_title' => '3',
            'product_image1' => 'product-amp.webp',
            'product_image2' => 'product-amp.webp',
            'product_detail1' => 'It is a long established fact that a reader will be distracted by the readable',
            'product_detail2' => 'It is a long established fact that a reader will be distracted by the readable',
            'section4_background' => 'Nakamichi_footer.webp',
            's4_descrip' => 'Carrying on the tradition of our presence in the global audio <br> market, Nakamichi was present at this years CES 2020',
            'sub_s4_img1' => 'apm1.png',
            'sub_s4_title1' => 'DIGITAL SIGNAL PROCESSORS',
            'sub_s4_btn1' => 'Shop Now',
            'sub_s4_img2' => 'apm1.png',
            'sub_s4_title2' => 'DIGITAL SIGNAL PROCESSORS',
            'sub_s4_btn2' => 'Shop Now',
            'sub_s4_img3' => 'apm1.png',
            'sub_s4_title3' => 'DIGITAL SIGNAL PROCESSORS',
            'sub_s4_btn3' => 'Shop Now',
            'footer_top_left' => 'Explore More Categories',
            'footer_top_right' => 'hello@gmail.com',
            'footer_description' => '<h5>About</h5> <p>We are a team of audioheads, sound engineers, and all in all passionate about all things audio </p> ',
            'footer_quick_link' => '<h5>Quick Links</h5> <br> <a href="#">Home</a>',
            'footer_content_right' => '<h5>NAKAMICHI NEWSLETTER</h5> <p> Subscribe to receive updates, access to exclusive deals, and more on our mobile audio products. </p>',
            'footer_btn_text' => 'SUBSCRIBE',
            'footer_logo' => 'logo.png',
            'footer_cards' => 'method.png',

    ]);

        Product::create([
            'id' => '1',
            'user_id' => '1',
            'name' => 'xyz',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgfWpeA7uTbD-OhGbXU20DGTP5goSok4hVpA&usqp=CAU',
            'sku' => '111',
            'serial_no' => '111',
        ]);

        Country::insert([
           [
               'id' => '1',
               'name' => 'Pakistan'
           ],

            [
                'id' => '2',
                'name' => 'China'
            ],
            [
                'id' => '4',
                'name' => 'Japan'
            ],
            [
                'id' => '5',
                'name' => 'Afghanistan'
            ],
            [
                'id' => '6',
                'name' => 'Albania'
            ],
            [
                'id' => '7',
                'name' => 'Algeria'
            ],
            [
                'id' => '8',
                'name' => 'USA'
            ],
            [
                'id' => '9',
                'name' => 'Germany'
            ],
            [
                'id' => '10',
                'name' => 'France'
            ],
            [
                'id' => '11',
                'name' => 'Russia'
            ],
            [
                'id' => '12',
                'name' => 'Turkey'
            ],
            [
                'id' => '13',
                'name' => 'Turkey'
            ],
            [
                'id' => '14',
                'name' => 'United Arab Emirates'
            ],
            [
                'id' => '15',
                'name' => 'United Arab Emirates'
            ],
            [
                'id' => '16',
                'name' => 'United Kingdom'
            ],

        ]);
    }
}
