<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
	public function index()
	{
		$posts = DB::table('canvas_posts')->where('deleted_at', null)->take(3)->get();
		return view('visitor.index', compact('posts'));
	}

	public function price()
	{
		return view('visitor.price');
	}

	public function contact()
	{
		return view('visitor.contact');
	}

	public function contactForm(Request $request)
	{
	  $request->validate([
	    'name' => 'required|string|max:255',
	    'email' => 'required|email',
	    'message' => 'required|string|max:255',
    ]);
		$info = [
			'type'    => 'contact',
			'name'    => $request->name,
			'email'   => $request->email,
			'message' => $request->message,
		];

		Mail::to('hello@pixelsensepark.com')->send(new SendMail($info));

		return back()->with('success', 'Your Message Sended Successfully');
	}

	public function terms()
	{
		return view('visitor.terms');
	}

	public function privacyPolicy()
	{
		return view('visitor.privacy_policy');
	}

	public function aboutUs()
	{
		return view('visitor.about_us');
	}

	public function service1()
	{
		return view('visitor.services.clipping_path');
	}

	public function service2()
	{
		return view('visitor.services.color_variant');
	}

	public function service3()
	{
		return view('visitor.services.drop_shadow');
	}

	public function service4()
	{
		return view('visitor.services.ghost_mannequin');
	}

	public function service5()
	{
		return view('visitor.services.image_masking');
	}

	public function service6()
	{
		return view('visitor.services.jewelry_editing');
	}

	public function service7()
	{
    return view('visitor.services.photo_retouching');
  }

	public function service8()
	{
    return view('visitor.services.product_photo_editing');
	}

	public function service9()
	{
		return view('visitor.services.realestate_hdr');
	}
}
