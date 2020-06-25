<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function SiteAction()
   {
	return view('site');
   }

    public function LKAction()
   {
	return view('lk');
   }

   public function reg()
   {
	return view('lk');
   }


    public function ForumAction()
   {
	return view('forum', ['forum'=> (new ArticleController())->show()]);
   }
}
