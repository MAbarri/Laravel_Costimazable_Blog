<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->delete();
        Page::create(["id"=>"1","language_id"=>"2","parent_id"=>null,"lft"=>"1","rgt"=>"2","depth"=>"0","title"=>"Page Example","slug"=>"page-example",
          "content"=>'<div class=\"\">\r\n<div class=\"\">\r\n<div class=\"\">\r\n<div class=\"\">\r\n<div class=\"\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6 col-lg-6\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6 col-lg-6\">\r\n<h4>About our company<\/h4>\r\n<p><strong>Meliore inciderint qui ne. Suas cotidieque vel ut lobortis reformidans duo<\/strong><\/p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate<\/p>\r\n<p>Mel explicari adipiscing consectetuer no, no mel apeirian scripserit repudiandae, ad assum mundi scribentur eam. Graecis offendit phaedrum eu his, eius ferri quidam eos ad, quis delenit vel ei. Alia modus facete te eos, eu tation appellantur per<\/p>\r\n<\/div>\r\n<div class=\"col-sm-6 col-lg-6\">\r\n<h4>Projects<\/h4>\r\n<div class=\"progress\">\r\n<div class=\"progress-bar progress-bar-success progress-bar-striped active\" style=\"width: 40%;\">40% Complete (success)<\/div>\r\n<\/div>\r\n<div class=\"progress\">\r\n<div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width: 20%;\">20% Complete<\/div>\r\n<\/div>\r\n<div class=\"progress\">\r\n<div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width: 60%;\">60% Complete (warning)<\/div>\r\n<\/div>\r\n<div class=\"progress\">\r\n<div class=\"progress-bar progress-bar-danger progress-bar-striped active\" style=\"width: 80%;\">80% Complete<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>\r\n<\/div>',"description"=>"Your page description","isHTMLPage"=>"1","active"=>"1"]);

    }
}
