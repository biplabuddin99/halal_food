@extends('master')

@section('content')

      <!-- left side div end -->
      <!-- right side div start -->
      <div class="col right-side" style="padding: 0">
        <!-- slide start -->
        <div class="m-3 slider">
          <div
            id="carouselExampleCaptions"
            class="carousel slide shadow"
            data-bs-ride="false"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              @forelse ($slide as $s)
              <div class="carousel-item active">
                  <a href="#"
                    ><img
                      src="{{ asset('uploads/slider') }}/{{ $s->slider_image }}"
                      class="d-block w-100"
                      alt="..."
                  /></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $s->title }}</h5>
                    <p>
                      {{ $s->short_description }}
                    </p>
                  </div>
                </div>

              @empty
                  <p>no data</p>
              @endforelse
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <!-- slide end -->
        <!-- product Row 1 start-->
        <div class="container product-row-1 my-4">
          <div class="product-heading">
            <div class="row">
              <div class="col">
                <p class="h6">
                  <img
                    class="body-title-icon"
                    src="{{ asset('assets/resource') }}/img/icon/image 49.png"
                    alt=""
                  /><strong>Our Popular Product</strong>
                </p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="view">
                  <a href="{{ route('product.index') }}">View All</a>
                </p>
              </div>
            </div>
          </div>

          <div class="product-row my-3">
            <div class="row justify-content-center">
                @forelse ($product as $p)

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow mb-3">
                      <a href="#">
                        <a href="{{ route('product_details.singleProduct',$p->id) }}">
                      <img class="card-img-top" src="{{ asset('./../../albaik/') }}/{{ $p->item_image }}" width="200px" height="200px"/>
                      </a>
                      <div class="card-body">
                        <p class="card-title text-center">{{ $p->item_name }}</p>
                        <p class="card-title text-center m-0 p-0">{{ $p->sales_price .' '.'TK' }}</p>
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

            </div>
          </div>
        </div>
        <!-- product Row 1 end-->
        <!-- product Row 2 start-->
        <div class="container product-row-1 my-5">
          <div class="product-heading">
            <div class="row">
              <div class="col">
                <p class="h6">
                  <img
                    class="body-title-icon"
                    src="{{ asset('assets/resource') }}/img/icon/image 49.png"
                    alt=""
                  /><strong>Our offer Product</strong>
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
                @forelse ($offer_product as $off)
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow mb-3">
                      <a href="#">
                        <a href="{{ route('product_details.singleProduct',$off->id) }}">
                      <img class="card-img-top" src="{{ asset('./../../albaik/') }}/{{ $off->item_image }}"  width="200px" height="200px"/>
                      </a>
                      <div class="card-body">
                        <p class="card-title text-center">{{ $off->item_name }}</p>
                        <p class="card-title text-center m-0 p-0">{{ $off->sales_price .' '.'TK' }}</p>
                        <div class="card-button">
                          <a href="#">+ Add to Card</a>
                          <a href="#"><i class="bi bi-heart-fill"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @empty
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card shadow mb-3">
                        <img
                            class="card-img-top"
                            src="{{ asset('assets/resource') }}/img/image 7.png"
                            alt=""
                        />
                        <div class="card-body">
                            <p class="card-title text-center">Beef Bone In ± 50 gm</p>
                            <div class="card-button">
                            <a href="#">+ Add to Card</a>
                            <a href="#"><i class="bi bi-heart-fill"></i></a>
                            </div>
                        </div>
                        </div>
                  </div>
                @endforelse
            </div>
          </div>
        </div>
        <!-- product Row 2 end-->
        <!-- Product Catagory Section start -->
        <div class="product-catagory my-5 p-4">
          <p class="mb-4">Our Products Catagory</p>
          <div class="row justify-content-center">

            <?php $category = DB::table('db_category')->where('is_slied', '1')->select('category_name','image','is_slied')->get(); ?>

            @forelse ($category as $cat)
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
                <div class="d-flex catagory-card shadow">
                    <div class="row">
                    <div class="col-5">
                        <img
                        class="img-fluid"
                        src="{{ asset('./../../albaik/uploads/category') }}/{{ $cat->image }}"
                        alt=""
                        />
                    </div>
                    <div class="col-7">
                        <p>{{ $cat->category_name }}</p>
                    </div>
                    </div>
                </div>
                </div>
            @empty
              <p>no category</p>
            @endforelse
          </div>
        </div>
        <!-- Product Catagory Section end -->
        <!-- Our Offers Section start -->
        <div class="our-offers">
          <p class="mb-4">Our Offers</p>
          <div class="m-3 slider">
            <div
              id="carouselExampleCaptionsa"
              class="carousel slide shadow-lg"
              data-bs-ride="false"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptionsa"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptionsa"
                  data-bs-slide-to="1"
                  aria-label="Slide"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptionsa"
                  data-bs-slide-to="2"
                  aria-label="Slide"
                ></button>
              </div>
              <div class="carousel-inner">
                    @forelse ($offer as $of)
                    <div class="carousel-item active">
                        <a href="#"
                        ><img
                            src="{{ asset('uploads/offer') }}/{{ $of->offer_image }}"
                            class="d-block w-100"
                            alt="..."
                        /></a>
                        <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $of->title }}</h5>
                        <p>
                            {{ $of->short_description }}
                        </p>
                        </div>
                    </div>

                    @empty
                        <p>no offer</p>
                    @endforelse
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleCaptionsa"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleCaptionsa"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <!--  Our Offers Section end -->
        <div class="container faq my-5">
          <p>FAQ</p>
          <div class="row faq-body">
            <div class="col-sm-6">
                @forelse ($faq as $f)
                <div
                class="accordion accordion-flush shadow mb-4"
                id="accordionFlushExample"
                >
                <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button
                    class="accordion-button collapsed rounded"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne"
                    aria-expanded="false"
                    aria-controls="flush-collapseOne"
                    >
                    {{ $f->question }}
                    </button>
                </h2>
                <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                >
                    <div class="accordion-body">
                    {{ $f->description }}
                    </div>
                </div>
                </div>
                </div>

                @empty
                <p>No Faq </p>
                @endforelse
              <div
                class="accordion accordion-flush shadow mb-4"
                id="accordionFlushExample"
              >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed rounded"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwo"
                      aria-expanded="false"
                      aria-controls="flush-collapseTwo"
                    >
                      How does the site work?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Placeholder content for this accordion, which is
                      intended to demonstrate the
                      <code>.accordion-flush</code> class. This is the first
                      item's accordion body.
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="accordion accordion-flush shadow mb-4"
                id="accordionFlushExample"
              >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed rounded"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseThree"
                      aria-expanded="false"
                      aria-controls="flush-collapseThree"
                    >
                      How much do deliveries cost?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Placeholder content for this accordion, which is
                      intended to demonstrate the
                      <code>.accordion-flush</code> class. This is the first
                      item's accordion body.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div
                class="accordion accordion-flush shadow mb-4"
                id="accordionFlushExample"
              >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed rounded"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFour"
                      aria-expanded="false"
                      aria-controls="flush-collapseFour"
                    >
                      What are your delivery hours?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Placeholder content for this accordion, which is
                      intended to demonstrate the
                      <code>.accordion-flush</code> class. This is the first
                      item's accordion body.
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="accordion accordion-flush shadow mb-4"
                id="accordionFlushExample"
              >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed rounded"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFive"
                      aria-expanded="false"
                      aria-controls="flush-collapseFive"
                    >
                      My order is wrong. What do I do?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Placeholder content for this accordion, which is
                      intended to demonstrate the
                      <code>.accordion-flush</code> class. This is the first
                      item's accordion body.
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="accordion accordion-flush shadow mb-4"
                id="accordionFlushExample"
              >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed rounded"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseSix"
                      aria-expanded="false"
                      aria-controls="flush-collapseSix"
                    >
                      Do you serve my area?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseSix"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Placeholder content for this accordion, which is
                      intended to demonstrate the
                      <code>.accordion-flush</code> class. This is the first
                      item's accordion body.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- Footer -->
        @include('layout.footer')

@endsection
