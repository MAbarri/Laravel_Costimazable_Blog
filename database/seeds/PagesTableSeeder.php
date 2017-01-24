<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->delete();
        Page::create(["id"=>"1","language_id"=>"2","parent_id"=>null,"lft"=>"1","rgt"=>"2","depth"=>"0","title"=>"Page Example","slug"=>"page-example",
          "content"=>"<div class=\"container\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"row\">\n<div class=\"col-sm-6 col-lg-6\">\n<div class=\"container\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"row\">\n<div class=\"col-sm-6 col-lg-6\">\n<h4>About our company</h4>\n<p><strong>Meliore inciderint qui ne. Suas cotidieque vel ut lobortis reformidans duo</strong></p>\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate</p>\n<p>Mel explicari adipiscing consectetuer no, no mel apeirian scripserit repudiandae, ad assum mundi scribentur eam. Graecis offendit phaedrum eu his, eius ferri quidam eos ad, quis delenit vel ei. Alia modus facete te eos, eu tation appellantur per</p>\n</div>\n<div class=\"col-sm-6 col-lg-6\">\n<h4>Projects</h4>\n<div class=\"progress\">\n<div class=\"progress-bar progress-bar-success progress-bar-striped active\" style=\"width: 40%;\">40% Complete (success)</div>\n</div>\n<div class=\"progress\">\n<div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width: 20%;\">20% Complete</div>\n</div>\n<div class=\"progress\">\n<div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width: 60%;\">60% Complete (warning)</div>\n</div>\n<div class=\"progress\">\n<div class=\"progress-bar progress-bar-danger progress-bar-striped active\" style=\"width: 80%;\">80% Complete</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>","description"=>"Your page description","isHTMLPage"=>"1","active"=>"1"]);

    }
}
