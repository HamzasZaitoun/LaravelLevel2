<?php

namespace Database\Seeders;

use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            ["id" => 1],
            [
                'address' => 'address',
                'phone' => 'phone',
                'email' => 'email',
                'facebook' => 'facebook',
                'twitter' => 'twitter',
                'instagram' => 'instagram',
                'linkedin' => 'linkedin',
                'youtube' => 'youtube',
            ]
        );
    }
}
