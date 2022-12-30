<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Contactus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

         \App\Models\Admin::factory()->create([
             'name' => 'Test Admin',
             'username' => 'admin',
             'email' => 'customers@gulfclick.net',
             'email_verified_at' => now(),
             'password' => bcrypt('admin'),
             'remember_token' => Str::random(10),
         ]);
         \App\Models\Menu::factory()->create([
             'title' => 'Dashboard',
             'route' => [
                 'route_name' => "admin:dashboard"
             ],
             'type' => 'admin_sidebar',
             'icon' => 'kt-menu__link-icon flaticon-home',
             'order' => 999999
         ]);
         \App\Models\Menu::factory()->create([
             'title' => 'Setting',
             'type' => 'admin_sidebar',
             'icon' => 'kt-menu__link-icon flaticon2-gear',
             'order' => 10
         ]);
         \App\Models\Menu::factory()->create([
             'title' => 'About us',
             'type' => 'admin_sidebar',
             'icon' => 'kt-menu__link-icon fa fa-business-time',
             'order' => 400
         ]);

         \App\Models\Menu::factory()->create([
             'title' => 'Contact Us',
             'type' => 'admin_sidebar',
             'route' => [
                 'route_name' => "admin:contactus.index"
             ],
             'customData' => [
                 'counter' => [
                     "class" => Contactus::class,
                     "method" => "unRead"
                 ]
             ],
             'icon' => 'kt-menu__link-icon flaticon-email',
             'order' => 100
         ]);
         \App\Models\Menu::factory()->create([
             'title' => 'News',
             'type' => 'admin_sidebar',
             'route' => [
                 'route_name' => "admin:newspaper.index"
             ],
             'icon' => 'kt-menu__link-icon fa fa-newspaper',
             'order' => 300
         ]);
        \App\Models\Menu::factory()->create([
            'title' => 'Comments',
            'type' => 'admin_sidebar',
            'route' => [
                'route_name' => "admin:comments.index"
            ],
            'customData' => [
                'counter' => [
                    "class" => Comment::class,
                    "method" => "unRead"
                ]
            ],
            'icon' => 'kt-menu__link-icon fa fa-comments',
            'order' => 200
        ]);
        \App\Models\Menu::factory()->create([
            'title' => 'Setting',
            'parent_id' => 2,
            'route' => [
                'route_name' => "admin:setting.index"
            ],
            'type' => 'admin_sidebar',
            'order' => 999999
        ]);
        \App\Models\Menu::factory()->create([
            'title' => 'Page content',
            'parent_id' => 2,
            'route' => [
                'route_name' => "admin:content"
            ],
            'type' => 'admin_sidebar',
            'order' => 999998
        ]);
        \App\Models\Menu::factory()->create([
            'title' => 'Admins',
            'parent_id' => 2,
            'route' => [
                'route_name' => "admin:admins.index"
            ],
            'type' => 'admin_sidebar',
            'order' => 999997
        ]);

        \App\Models\Menu::factory()->create([
            'title' => 'Our Services',
            'parent_id' => 3,
            'route' => [
                'route_name' => "admin:services.index"
            ],
            'type' => 'admin_sidebar',
            'order' => 500
        ]);
        \App\Models\Menu::factory()->create([
            'title' => 'Our Clients',
            'parent_id' => 3,
            'route' => [
                'route_name' => "admin:clients.index"
            ],
            'type' => 'admin_sidebar',
            'order' => 400
        ]);
        \App\Models\Menu::factory()->create([
            'title' => 'Our Partners',
            'parent_id' => 3,
            'route' => [
                'route_name' => "admin:partners.index"
            ],
            'type' => 'admin_sidebar',
            'order' => 300
        ]);
        \App\Models\Menu::factory()->create([
            'title' => 'About us',
            'parent_id' => 3,
            'route' => [
                'route_name' => "admin:about_us"
            ],
            'type' => 'admin_sidebar',
            'order' => 200
        ]);
        \App\Models\Menu::factory()->create([
            'title' => 'Team Member',
            'parent_id' => 3,
            'route' => [
                'route_name' => "admin:teams.index"
            ],
            'type' => 'admin_sidebar',
            'order' => 100
        ]);

    }
}
