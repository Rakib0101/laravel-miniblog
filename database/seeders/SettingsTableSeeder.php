<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_name' => 'Mini Blog',
            'site_logo' => 'image.jpg',
            'site_bio' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.',
            'copyright' => 'Copyright © 2022 All rights reserved',
            'facebook' => 'Copyright © 2022 All rights reserved',
            'twitter' => 'Copyright © 2022 All rights reserved',
            'instagram' => 'Copyright © 2022 All rights reserved',
            'reddit' => 'Copyright © 2022 All rights reserved',
            'email' => 'Copyright © 2022 All rights reserved',
        ]);
    }
}
