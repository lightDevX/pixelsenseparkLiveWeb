<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  protected $itemPerPage = 10;

  /**
   * A Function to PUT a sl number with Collection of data.
   *
   * @param Collection collection - A collection of data collected with paginate function
   * @return nothing
   */
  public function putSL($collection)
  {
    $start = ($collection->currentPage() * $this->itemPerPage - $this->itemPerPage) + 1;
    $collection->each(function ($value) use (&$start) {
      $value->sl = $start++;
    });
  }
}
