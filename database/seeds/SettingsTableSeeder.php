<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->delete();
        Setting::create(['id' => 1,'logo'=>'uploads/logos/logo_5P6EQ15oR4m5x0BOR4Xa7WMbuVItL2OS.png', 'email' => 'me@example.com', 'facebook' => 'http://facebook.com/myProfile', 'twitter' => 'http://twitter.com/myProfile','phoneNumber'=>'(365) 987 132 321', 'address'=>'Nicholas Desmond Simon Graham P.O. Box 1230 Georgetown, Cayman Islands B. W. I.','owner'=>'John doe']);
    }
}
