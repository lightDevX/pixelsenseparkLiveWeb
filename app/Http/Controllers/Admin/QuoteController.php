<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Quote;
use Illuminate\Support\Facades\File;

class QuoteController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $items = Quote::orderBy('id', 'desc')->paginate(10);
    $this->putSL($items);
    return view('admin.quote.index', compact('items'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Quote $quote)
  {
    $quote->status = 1;
    $quote->save();
    if($quote->files){
      $quote->files = explode(",", $quote->files);
    }
    if($quote->services){
      $quote->services = explode(",", $quote->services);
    }
    return view('admin.quote.view', compact('quote'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $item = Quote::findOrFail($id);
    $files = explode(",", $item->files);
    foreach ($files as $file) {
      $filePath = public_path('storage/quotes/' . $item->user_id . '/' . $file);
      if (file_exists($filePath)) {
        File::delete($filePath);
      }
    }
    $item->delete();

    return back()->with('success', 'Quote Deleted Successfully');
  }
}
