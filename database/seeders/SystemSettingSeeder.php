<?php

namespace Database\Seeders;

use App\Models\SystemSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SystemSetting::create([
            'site_name' => 'Inventory Shop',
            "site_logo" => null,
            "site_favicon" => null,
            "site_phone" => '01912440922',
            "site_email" => 'mirazul2013@gmail.com',
            'site_facebook_link' => 'inventory@facebook.com',
            'meta_keywords' => 'POS, Inventory, Shopping',
            'meta_description' => 'It is a multi product inventory'
        ]);
    }
}
