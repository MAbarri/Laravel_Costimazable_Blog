<?php

use Illuminate\Database\Seeder;
use App\HomeSection;

class HomeSectionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('home_sections')->delete();
        HomeSection::create(['id' => 1, 'language_id' => '2',
         'title' => 'Section example 1','slug'=>'section-example-1',
         'content'=>"<section class=\"callaction\">\n<div class=\"container\">\n<div class=\"row\">\n<div class=\"col-lg-8\">\n<div class=\"cta-text\">\n<h2>Awesome site template corporate business</h2>\n<p>Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum</p>\n</div>\n</div>\n<div class=\"col-lg-4\">\n<div class=\"cta-btn\"><a class=\"btn btn-theme btn-lg\" href=\"#\">Grab it now </a></div>\n</div>\n</div>\n</div>\n</section>"]);
    }
}
