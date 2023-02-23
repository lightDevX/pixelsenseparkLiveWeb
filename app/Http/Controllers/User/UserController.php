<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Quote;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
	/**
	 * Change Password Function
	 *
	 * @param Request request - Request form data
	 * @return redirect
	 */
	public function index()
	{
		return view('user.index');
	}

	/**
	 * Change Password Function
	 *
	 * @param Request request - Request form data
	 * @return redirect
	 */
	public function getQuote()
	{
		$user = auth()->user();
		return view('user.quote', compact('user'));
	}

	/**
	 * Remove file from storage and cache
	 *
	 * @return bool
	 */
	public function removeFile(Request $request)
	{
		$path = storage_path('app/public/quotes/' . Auth::id() . '/' . $request->input('fileName'));
		if (file_exists($path)) {
			unlink($path);
    }
    return response()->json(['success'=>'File deleted']);
	}

	/**
	 * Change Password Function
	 *
	 * @param Request request - Request form data
	 * @return redirect
	 */
	public function saveQuote(Request $request)
	{
		$request->validate([
			'name'       => 'required|string',
			'email'      => 'required|email',
			'services'   => 'nullable|array',
			'message'    => 'nullable|string',
			'files'      => 'nullable|string',
			'link'       => 'nullable|string',
		]);

		$allServices = '';
		if (!is_null($request->input('services'))) {
			foreach ($request->input('services') as $key => $value) {
				$allServices .= $request->input('services')[$key] . ',';
			}
		}

		Quote::create([
			'user_id'  => auth()->user()->id,
			'name'     => $request->input('name'),
			'email'    => $request->input('email'),
			'services' => rtrim($allServices, ','),
			'message'  => $request->input('message'),
			'files'    => rtrim($request->input('files'), ','),
			'link'     => $request->input('link')
		]);

		$info = [
			'type' => 'quote',
		];
		Mail::to('hello@pixelsensepark.com')->send(new SendMail($info));

		return back()->with('success', 'Quote Sended Successfully');
	}

	/**
	 * Change Password Function
	 *
	 * @param Request request - Request form data
	 * @return redirect
	 */
	public function settings()
	{
		$user = auth()->user();
		return view('user.settings', compact('user'));
	}

	/**
	 * Change Password Function
	 *
	 * @param Request request - Request form data
	 * @return redirect
	 */
	public function updateSettings(Request $request)
	{
		$user = Auth::user();

		$this->validate($request, [
			'name'  => 'required|string',
			'email' => 'required|email|unique:users,email,' . $user->id,
			'phone' => 'max:11',
		]);

		$user->update([
			'name'  => $request->name,
			'email' => $request->email,
			'phone' => $request->phone,
		]);

		return redirect()->back()->with('message', 'Settings Updated Successfully.');
	}

	/**
	 * Change Password Function
	 *
	 * @param Request request - Request form data
	 * @return redirect
	 */
	public function changePassword(Request $request)
	{
		$this->validate($request, [
			'current_password' => ['required', 'string'],
			'password'         => ['required', 'string', 'min:6', 'max:30', 'confirmed'],
		]);

		Auth::user()->update([
			'password' => Hash::make($request->input('password')),
		]);

		return back()->with('success', 'Your password changed successfully.');
	}
}
