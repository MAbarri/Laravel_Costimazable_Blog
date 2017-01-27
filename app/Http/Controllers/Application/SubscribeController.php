<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;
use App\Subscriber;
use Input;

class SubscribeController extends ApplicationController
{

  public function postChange()
  {
    $subscriberEmail = Input::get('email');

    $subscriber = Subscriber::where('email', '=', $subscriberEmail )->first();
    if ($subscriber === null) {
      $subscriber= new Subscriber;
      $subscriber->email = $subscriberEmail;
      $subscriber->save();
      return back()->withErrors(['success']);
    } else{
      return back()->withErrors(['exists']);;
    }
  }
}
