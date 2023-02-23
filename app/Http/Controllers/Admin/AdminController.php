<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
	public function index()
	{
		return view('admin.index');
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
		return view('admin.settings', compact('user'));
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

		return redirect()->back()->with('success', 'Settings Updated Successfully.');
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
			'password' => Hash::make($request->get('password')),
		]);

		return back()->with('success', 'Your password changed successfully.');
	}
}
