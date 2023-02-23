@extends('layouts.app')

@section('content')
<section>
  <div class="container px-6 md:px-12 py-12 mx-auto">
    @if ($items->count())
    <div class="text-center mb-6">
      <h1 class="text-2xl sm:text-3xl font-medium title-font mb-4">Quote Requests</h1>
      <div class="flex mt-4 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <p class="text-gray-600 mb-4">Unseen quote <span class="text-gray-800">{{ newQuoteCount() }}</span></p>
    <table class="table table-auto w-full mb-4">
      <thead>
        <tr class="text-left">
          <th class="border px-4 py-2">#</th>
          <th class="border px-4 py-2" colspan="3">Requests</th>
          {{-- <th class="border px-4 py-2">Actions</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach ($items as $item)
        <tr class="border">
          <td class="px-4 py-1 w-20">{{ $item->sl }}</td>
          <td class="px-4 py-1">
            {{ $item->email }}
            @if ($item->status == 0)
            <span class="inline-block bg-indigo-500 text-white rounded-full px-2 ml-4">New</span>
            @endif
          </td>
          <td class="px-4 py-1 w-40 text-gray-600">{{ $item->created_at->diffForHumans() }}</td>
          <td class="px-4 py-1 w-32">
            <div class="flex">
              <a href="{{ route('admin.quotes.show', $item->id) }}" class="flex justify-center items-center text-gray-700 hover:bg-gray-200 h-10 w-10 rounded-full ">
                <svg viewBox="0 0 20 20" fill="currentColor" class="eye w-5 h-5">
                  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                  <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
              <button data-id="{{ $item->id }}" class="modal-open flex justify-center items-center text-gray-700 hover:bg-gray-200 focus:outline-none py-1 px-2 h-10 w-10 rounded-full">
                <svg viewBox="0 0 20 20" fill="currentColor" class="trash w-5 h-5">
                  <path fill-rule="evenodd"
                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $items->links() }}

    <!--Modal Start-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
      <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
          <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
          </svg>
          <span class="text-sm">(Esc)</span>
        </div>
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Delete Quote!</p>
            <div class="modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
            </div>
          </div>
          <!--Body-->
          <p>Permanently Delete This Quote</p>
          <!--Footer-->
          <div class="flex justify-end pt-2">
            <button class="px-4 bg-red-500 py-2 rounded text-white hover:bg-red-400" type="submit" form="item-destroy-form">delete</button>
            <form action="" id="item-destroy-form" method="POST">
              @csrf
              @method('DELETE')
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->

    @else
    <div class="p-6 bg-blue-400">
      <h5 class="text-white">No Quote Request Yet!!!</h5>
    </div>
    @endif
  </div>
</section>
@endsection