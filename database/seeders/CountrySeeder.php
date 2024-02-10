<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $countries = [
            ['name' => 'Mexico', 'phone_code' => '+52'],
            ['name' => 'Germany', 'phone_code' => '+49'],
            ['name' => 'France', 'phone_code' => '+33'],
            ['name' => 'Italy', 'phone_code' => '+39'],
            ['name' => 'Spain', 'phone_code' => '+34'],
            ['name' => 'Portugal', 'phone_code' => '+351'],
            ['name' => 'Netherlands', 'phone_code' => '+31'],
            ['name' => 'Belgium', 'phone_code' => '+32'],
            ['name' => 'Switzerland', 'phone_code' => '+41'],
            ['name' => 'Austria', 'phone_code' => '+43'],
            ['name' => 'Sweden', 'phone_code' => '+46'],
            ['name' => 'Norway', 'phone_code' => '+47'],
            ['name' => 'Denmark', 'phone_code' => '+45'],
            ['name' => 'Finland', 'phone_code' => '+358'],
            ['name' => 'Poland', 'phone_code' => '+48'],
            ['name' => 'Hungary', 'phone_code' => '+36'],
            ['name' => 'Czech Republic', 'phone_code' => '+420'],
            ['name' => 'Greece', 'phone_code' => '+30'],
            ['name' => 'Turkey', 'phone_code' => '+90'],
            ['name' => 'Saudi Arabia', 'phone_code' => '+966'],
            ['name' => 'Iran', 'phone_code' => '+98'],
            ['name' => 'Iraq', 'phone_code' => '+964'],
            ['name' => 'Syria', 'phone_code' => '+963'],
            ['name' => 'Lebanon', 'phone_code' => '+961'],
            ['name' => 'Jordan', 'phone_code' => '+962'],
            ['name' => 'Israel', 'phone_code' => '+972'],
            ['name' => 'Egypt', 'phone_code' => '+20'],
            ['name' => 'Libya', 'phone_code' => '+218'],
            ['name' => 'Algeria', 'phone_code' => '+213'],
            ['name' => 'Morocco', 'phone_code' => '+212'],
            ['name' => 'Tunisia', 'phone_code' => '+216'],
            ['name' => 'Mauritania', 'phone_code' => '+222'],
            ['name' => 'Mali', 'phone_code' => '+223'],
            ['name' => 'Senegal', 'phone_code' => '+221'],
            ['name' => 'Gambia', 'phone_code' => '+220'],
            ['name' => 'Guinea', 'phone_code' => '+224'],
            ['name' => 'Ivory Coast', 'phone_code' => '+225'],
            ['name' => 'Burkina Faso', 'phone_code' => '+226'],
            ['name' => 'Niger', 'phone_code' => '+227'],
            ['name' => 'Togo', 'phone_code' => '+228'],
            ['name' => 'Benin', 'phone_code' => '+229'],
            ['name' => 'Liberia', 'phone_code' => '+231'],
            ['name' => 'Sierra Leone', 'phone_code' => '+232'],
            ['name' => 'Ghana', 'phone_code' => '+233'],
            ['name' => 'Nigeria', 'phone_code' => '+234'],
            ['name' => 'Chad', 'phone_code' => '+235'],
            ['name' => 'Central African Republic', 'phone_code' => '+236'],
            ['name' => 'Cameroon', 'phone_code' => '+237'],
            ['name' => 'Cape Verde', 'phone_code' => '+238'],
            ['name' => 'Sao Tome and Principe', 'phone_code' => '+239'],
            ['name' => 'Equatorial Guinea', 'phone_code' => '+240'],
        ];

        DB::table('countries')->insert($countries);
    }

}
