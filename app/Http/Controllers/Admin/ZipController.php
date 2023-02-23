<?php

namespace App\Http\Controllers\Admin;

use App\Quote;
use ZipArchive;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZipController extends Controller
{
	/**
	 * Change Password Function
	 *
	 * @param Request request - Request form data
	 * @return redirect
	 */
	public function createZip(Request $request)
	{
		$quote = Quote::where('id', $request->quote_id)->first();

		if (!empty($quote->files) || !empty($request->get('selectedFiles'))) {
			$filesName = $request->get('selectedFiles') ?? explode(',', $quote->files);
			$directory = public_path('storage/quotes/' . $quote->user_id . '/');

			$zipFileName = str_replace(' ', '_', $quote->name) . '_' . $quote->user_id . Str::random(5) . '.zip';
			$zip         = new ZipArchive();

			if ($zip->open($directory . $zipFileName, ZipArchive::CREATE) === true) {
				foreach ($filesName as $fileName) {
					$zip->addFile($directory . $fileName, $fileName);
				}
				$zip->close();
			}
			$fileToPath = $directory . $zipFileName;
			if (file_exists($fileToPath)) {
				return response()->download($fileToPath, $zipFileName)->deleteFileAfterSend(true);
			}
		}
		return back()->with('warning', 'No Files There!');
	}
}
