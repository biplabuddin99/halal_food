@extends('master')
@section('content')
<div class="col right-side" style="padding: 0">
          <!-- product display -->
          <div class="p-3">
            <?php $item =DB::table('db_items')->orderBy('id', 'desc')->first(); ?>
            <div class="product-display container bg-white p-3 rounded shadow">
              <!-- top div -->
              <div class="top-display-1">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb fw-bold">
                    <li class="breadcrumb-item">
                      <a href="#">Grocary</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Vagitable</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Green Vagitable
                    </li>
                  </ol>
                </nav>
                <p class="p-title">{{$item->item_name}}</p>
                <div class="d-flex top-display-2">
                  <p><span>Unit :</span>1 kg</p>
                  <p><span>Review :</span>5 <i class="bi bi-star-half"></i></p>
                  <p><span>SKU :</span>{{$item->item_code}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="product-img">
                    <span>29%</span>
                    <span>off</span>
                    <img
                      class="img-fluid"
                      src="{{ asset('./../../albaik/') }}/{{$item->item_image}}"
                      alt=""
                    />
                  </div>
                </div>
                <div class="col-sm-6 p-specification">
                  <div class="p-price d-flex">
                    <p><del>$ 9.77</del></p>
                    <p>{{$item->sales_price}}</p>
                  </div>
                  <span>In Stock</span>
                  <p class="p-short-specification">
                    {{$item->short_description}}
                  </p>
                  <form class="quentity d-flex my-4" action="">
                    <div>
                      <i class="bi bi-dash"></i>
                    </div>
                    <input type="text" placeholder="1" value="1" />
                    <div>
                      <i class="bi bi-plus"></i>
                    </div>
                    <input type="submit" value="Add To Cart" />
                    <div>
                      <i class="bi bi-heart-fill"></i>
                    </div>
                  </form>
                  <div class="p-short-point">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <i class="bi bi-brightness-high-fill"></i>Type: {{$item->category_id}}
                      </li>
                      <li class="nav-item">
                        <i class="bi bi-brightness-high-fill"></i>MFG: Jun
                        4.2021
                      </li>
                      <li class="nav-item">
                        <i class="bi bi-brightness-high-fill"></i>LIFE: 40 days
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- condition -->
            <div class="container shadow bg-white p-3 my-3 rounded">
              <div class="condition">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="d-flex">
                      <i class="bi bi-truck"></i>
                      <p>Free Shipping apply to all orders over $100</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="d-flex">
                      <i class="bi bi-basket-fill"></i>
                      <p>Guranteed 100% Organic from natural farmas</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="d-flex">
                      <i class="bi bi-shop"></i>
                      <p>1 Day Returns if you change your mind</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- product discripiton tabs -->
            <div class="container my-4">
              <nav class="bg-white rounded shadow mb-3">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button
                    class="nav-link active"
                    id="nav-home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-home"
                    type="button"
                    role="tab"
                    aria-controls="nav-home"
                    aria-selected="true"
                  >
                    discripiton
                  </button>
                  <button
                    class="nav-link"
                    id="nav-profile-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-profile"
                    type="button"
                    role="tab"
                    aria-controls="nav-profile"
                    aria-selected="false"
                  >
                    Addisonal INformaiton
                  </button>
                </div>
              </nav>
              <div
                class="tab-content bg-white p-3 rounded shadow"
                id="nav-tabContent"
              >
                <div
                  class="tab-pane fade show active"
                  id="nav-home"
                  role="tabpanel"
                  aria-labelledby="nav-home-tab"
                  tabindex="0"
                >
                  {{$item->description}}
                </div>
                <div
                  class="tab-pane fade"
                  id="nav-profile"
                  role="tabpanel"
                  aria-labelledby="nav-profile-tab"
                  tabindex="0"
                >
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">S.L.</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Height</th>
                        <th scope="col">Exp. Date:</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>{{$item->weight}}</td>
                        <td>{{$item->height}}</td>
                        <td>{{$item->expire_date}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Related Products start -->
            <div class="container product-row-1 my-4">
              <div class="product-heading">
                <div class="row">
                  <div class="col">
                    <p class="h6">
                      <img
                        class="body-title-icon"
                        src="#"
                        alt=""
                      /><strong>Related Products</strong>
                    </p>
                  </div>
                  <div class="col d-flex justify-content-end">
                    <p class="view">
                      <a href="#">View All</a>
                    </p>
                  </div>
                </div>
              </div>

              <div class="product-row my-3">
                <div class="row justify-content-center">
                <?php $product = DB::table('db_items')->where('is_feature', '1')->select('item_name','price','item_image','is_feature')->get(); ?>
                @forelse ($product as $p)
                  <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow mb-3">
                      <img
                        class="card-img-top"
                        src="{{ asset('uploads/product') }}/{{ $p->item_image }}"
                        alt=""
                      />
                      <div class="card-body">
                        <p class="card-title text-center">
                        {{ $p->item_name }}
                        </p>
                        <div class="card-button">
                          <a href="#">+ Add to Card</a>
                          <a href="#"><i class="bi bi-heart-fill"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @empty
                    <p>no Product</p>
                @endforelse
                  <!-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow mb-3">
                      <img
                        class="card-img-top"
                        src="{{ asset('assets/resource') }}/img/image 7.png"
                        alt=""
                      />
                      <div class="card-body">
                        <p class="card-title text-center">
                          Beef Bone In ± 50 gm
                        </p>
                        <div class="card-button">
                          <a href="#">+ Add to Card</a>
                          <a href="#"><i class="bi bi-heart-fill"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow mb-3">
                      <img
                        class="card-img-top"
                        src="{{ asset('assets/resource') }}/img/image 7.png"
                        alt=""
                      />
                      <div class="card-body">
                        <p class="card-title text-center">
                          Beef Bone In ± 50 gm
                        </p>
                        <div class="card-button">
                          <a href="#">+ Add to Card</a>
                          <a href="#"><i class="bi bi-heart-fill"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow mb-3">
                      <img
                        class="card-img-top"
                        src="{{ asset('assets/resource') }}/img/image 7.png"
                        alt=""
                      />
                      <div class="card-body">
                        <p class="card-title text-center">
                          Beef Bone In ± 50 gm
                        </p>
                        <div class="card-button">
                          <a href="#">+ Add to Card</a>
                          <a href="#"><i class="bi bi-heart-fill"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow mb-3">
                      <img
                        class="card-img-top"
                        src="{{ asset('assets/resource') }}/img/image 7.png"
                        alt=""
                      />
                      <div class="card-body">
                        <p class="card-title text-center">
                          Beef Bone In ± 50 gm
                        </p>
                        <div class="card-button">
                          <a href="#">+ Add to Card</a>
                          <a href="#"><i class="bi bi-heart-fill"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow mb-3">
                      <img
                        class="card-img-top"
                        src="{{ asset('assets/resource') }}/img/image 7.png"
                        alt=""
                      />
                      <div class="card-body">
                        <p class="card-title text-center">
                          Beef Bone In ± 50 gm
                        </p>
                        <div class="card-button">
                          <a href="#">+ Add to Card</a>
                          <a href="#"><i class="bi bi-heart-fill"></i></a>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <!-- Related Products  end-->
          </div>
        </div>
      </div>
@endsection