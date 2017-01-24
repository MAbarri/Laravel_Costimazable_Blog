<?php

use Illuminate\Database\Seeder;
use App\Slide;

class SlidesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('slides')->delete();
        Slide::create(['id' => 1, 'language_id' => '2', 'title' => 'English Slide 1','slug'=>'english-slide-1','description'=>'This is an example of an english Home Slide', 'image' => 'uploads/images/2_F2OShOZoXgEJqJXqWzeiHjXEi0ZybBVe.jpg']);
        Slide::create(['id' => 2, 'language_id' => '2', 'title' => 'English Slide 2','slug'=>'english-slide-2','description'=>'This is another example of an english Home Slide', 'image' => 'uploads/images/1_pM3tV2yTWn8QmXNPwmV3feGfPLSKwRsD.jpg']);
    }
}
