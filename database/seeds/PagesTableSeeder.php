<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Page::truncate();

        $admin->pages()->saveMany([
            new Page([
                'title' => 'About',
                'url' => '/about',
                'content' => 'This is a testing CMS page.'
            ]),
            new Page([
                'title' => 'Contact',
                'url' => '/contact',
                'content' => 'Contact this number for any inquiries.'
            ]),
            new Page([
                'title' => 'Another Page',
                'url' => '/another-page',
                'content' => 'This is a another testing CMS page.'
            ]),
        ]);
    }
}
