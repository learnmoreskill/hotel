<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

        \App\Role::insert([

            'name' => 'SuperAdmin',
            'slug' => 'superadmin',
            'permissions' => '["add_sliders","view_sliders","update_sliders","delete_sliders","add_site_setting","view_site_setting","update_site_setting","delete_site_setting","add_room_page","view_room_page","update_room_page","delete_room_page","add_permissions","view_permissions","update_permissions","delete_permissions","add_manage_roles","view_manage_roles","update_manage_roles","delete_manage_roles","add_manage_permissions","view_manage_permissions","update_manage_permissions","delete_manage_permissions","add_hotel_staffs","view_hotel_staffs","update_hotel_staffs","delete_hotel_staffs","add_hotel_staff_page","view_hotel_staff_page","update_hotel_staff_page","delete_hotel_staff_page","add_hotel_rooms_page","view_hotel_rooms_page","update_hotel_rooms_page","delete_hotel_rooms_page","add_hotel_rooms","view_hotel_rooms","update_hotel_rooms","delete_hotel_rooms","add_gallery_page","view_gallery_page","update_gallery_page","delete_gallery_page","add_gallery","view_gallery","update_gallery","delete_gallery","add_events_page","view_events_page","update_events_page","delete_events_page","add_events","view_events","update_events","delete_events","add_contact_page","view_contact_page","update_contact_page","delete_contact_page","add_contact","view_contact","update_contact","delete_contact","add_about_page","view_about_page","update_about_page","delete_about_page","add_about","view_about","update_about","delete_about"]',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \App\User::insert([

            'name' => 'Admin',
            'email' => 'hotel@gmail.com',
            'password' => bcrypt('hotel'),
            'role_id' => 1

        ]);



        \App\SiteSetting::insert([
            'name' =>  'Demo Hotel',
            'email' => 'demohotel@company.com',
            'phone' => '977-42188313',
            'mobile' => '977-42188313',
            'logo1' => "",
            'address' =>  "Floor 2, Five Storey Building <br> New Road, Kathmandu, Nepal",
            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://www.twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'youtube' => 'https://www.youtube.com/',
        ]);

        \App\About::insert([

            'page_title' => 'About Us',
            'content_title' => 'About Us',
            'image' => '',
            'content' => '',


        ]);

        \App\HotelStaffPage::insert([

            'content_title' => 'Hotel Staffs',
            'content_subtitle' => 'All members of the hotel',


        ]);

        \App\ContactPage::insert([

            'page_title' => 'Contact Us',
            'page_subtitle' => 'Get in Touch',
            'cover_image' => ''

        ]);

        \App\RoomPage::insert([

            'room_title' => 'Room',
            'room_subtitle' => 'Stay with comfortability',
            'cover_image' => ''

        ]);

        \App\GalleryPage::insert([

            'page_title' => 'Gallery',
            'page_subtitle' => 'Get the best pictures',
            'cover_image' => '  '

        ]);

        \App\EventPage::insert([

            'page_title' => 'Events',
            'page_subtitle' => 'Get in Touch',
            'cover_image' => ''

        ]);

        \App\Menu::insert([

            'title' => 'home',
            'order_no' => 1,

        ]);

        \App\Menu::insert([

            'title' => 'about',
            'order_no' => 2,

        ]);
        \App\Menu::insert([

            'title' => 'room',
            'order_no' => 3,

        ]);
        \App\Menu::insert([

            'title' => 'event',
            'order_no' => 4

        ]);
        \App\Menu::insert([

            'title' => 'gallery',
            'order_no' => 5,

        ]);

        \App\Menu::insert([

            'title' => 'contact',
            'order_no' => 5,

        ]);

        \App\PageVisit::insert([

            'page_count' => 1,


        ]);
    }
}