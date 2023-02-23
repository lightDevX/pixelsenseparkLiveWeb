@extends('layouts.app')

@section('content')
<section>
  <div class="container px-6 md:px-12 py-12 mx-auto">
    <div class="flex mb-2">
      <a href="{{ url()->previous() }}" class="flex py-1">
        <svg viewBox="0 0 20 20" fill="currentColor" class="arrow-narrow-left w-6 h-6 mr-2">
          <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd">
          </path>
        </svg>
        Back
      </a>
    </div>

    <div class="my-4">
      <p>Name: {{ $quote->name }}</p>
      <p>Email: {{ $quote->email }}</p>
    </div>

    @if ($quote->services)
    <div class="mb-4">
      <p class="inline-block">Services: </p>
      @foreach ($quote->services as $k => $service)
      <span>
        <input type="checkbox" checked disabled>
        {{ str_replace('_', ' ', $service) }}
      </span>
      @endforeach
    </div>
    @endif

    @if ($quote->link)
      <div class="mb-4">
        <p>Files Link: {{ $quote->link }}</p>
      </div>
    @endif

    @if ($quote->files)
    <form action="{{ route('admin.download_zip') }}" method="POST">
      @csrf
      <input type="hidden" name="quote_id" value="{{ $quote->id }}">
      <table class="table table-auto w-full mb-4">
        <thead class="text-left">
          <tr>
            <th class="border px-4 py-2"><input class="form-checkbox" type="checkbox" name="select_all" id="select-all"></th>
            <th class="border px-4 py-2">#</th>
            <th class="border px-4 py-2">File Name</th>
          </tr>
        </thead>
        <tbody id="imageContainer">
          @foreach ($quote->files as $file)
          <tr class="border cursor-pointer hover:bg-gray-200">
            <td class="px-4 py-1 w-10"><input class="form-checkbox select-image" type="checkbox" name="selectedFiles[]" value="{{ $file }}" id="select-{{$loop->index}}"></td>
            <td class="px-4 py-1 w-10">{{ $loop->iteration }}</td>
            <td class="px-4 py-1">{{ $file }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="flex">
        <button type="submit" class="flex mx-auto my-2 md:my-8 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded-full text-lg">
          <span>Download Images</span>
          <svg class="fill-current w-4 h-4 mt-1 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
          </svg>
        </button>
      </div>
    </form>
    @endif

  </div>
</section>
@endsection

@push('scripts')
<script>
  let selectAll = document.getElementById('select-all');
  let imageContainer = document.getElementById('imageContainer');
  let allImage = document.getElementsByClassName('select-image');

  selectAll.addEventListener('change', (e) => {
    let checkedOrNot = e.target.checked;
    for (const image of allImage) {
      image.checked = checkedOrNot;
    }
  })

  imageContainer.addEventListener('click', (e) => {
    let flag = 1;
    let row = e.target.closest('tr').querySelector('input[type=checkbox]');

    if(e.target.type != 'checkbox'){
      row.checked = !row.checked;
    }
    if(!row.checked && selectAll.checked){
      selectAll.checked = false;
    }
    else if(row.checked){
      for (const image of allImage) {
        if(!image.checked){
          flag = 0;
        }
      }
      if(flag){
        selectAll.checked = true
      }
    }
  })
</script>
@endpush