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
         'content'=>'&lt;section class="callaction"&gt;<br /> &lt;div class="container"&gt;<br /> &lt;div class="row"&gt;<br /> &lt;div class="col-lg-8"&gt;<br /> &lt;div class="cta-text"&gt;<br /> &lt;h2&gt;Awesome site template &lt;span&gt;corporate&lt;/span&gt; business&lt;/h2&gt;<br /> &lt;p&gt; Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum&lt;/p&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;div class="col-lg-4"&gt;<br /> &lt;div class="cta-btn"&gt;<br /> &lt;a href="#" class="btn btn-theme btn-lg"&gt;Grab it now &lt;i class="fa fa-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; <br /> &lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/section&gt;']);
    }
}
