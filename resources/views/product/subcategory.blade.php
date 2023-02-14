@extends('master')

@section('content')
<div class="col right-side" style="padding: 0">
    <!-- offer banner start -->
    <div class="cg-offer-banner container p-3">
      <div class="row">
        @forelse ($subcategorys as $subcat)
        <div class="col">
            <a href="#">
              <img src="{{ asset('./../../albaik/uploads/subcategory') }}/{{ $subcat->advertise_image }}" alt="" />
            </a>
          </div>
        @empty
        <div class="col">
            <h3 class="text-center"> No Advertise</h3>
          </div>
        @endforelse
      </div>
    </div>
    <!-- offer banner end -->
    <!-- Subcategory start -->
    <div class="cg-sub-category p-3">
      <!-- Breadcrumb start -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item fw-bold"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item fw-bold"><a href="#">Library</a></li>
          {{-- <li class="breadcrumb-item active fw-bold" aria-current="page">
            Data
          </li> --}}
        </ol>
      </nav>
      <!-- Breadcrumb ends -->
      <!-- sub catagory -->
      <div class="row">
        @forelse ($show_subcategory as $subcat)
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
            <a href="{{ route('child-category.list',['subcategory_id' =>$subcat->id]) }}">
              <img src="{{ asset('./../../albaik/uploads/subcategory') }}/{{ $subcat->banner_image }}" width="150" height="150" alt="" />
              <p class="pe-5">{{ $subcat->subcategory_name }}</p></a
            >
          </div>
        @empty
        <h3 class="text-center">No Sub-Category Found</h3>
        @endforelse
      </div>
    </div>
    <!-- Subcatagory end -->
  </div>


@endsection
