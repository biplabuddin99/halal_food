      <!-- main seciton -->
      <main class="container-fluid">
          <div class="row">
            <!-- left site div start -->
            <div class="col-2 left-side shadow" style="padding: 0">
              <nav class="navbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#"
                      >offer Pakage
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=""
                      >Your Favorite Products
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </li>
                </ul>
                <div class="m-auto">
                  <h6>Our Products Catagory</h6>
                </div>
              </nav>
              <div class="left-bottom-div bg-light">
                <div class="navbar left-bottom-nav bg-light">
                     @php
                        $category =\App\Models\Category::all();
                    @endphp
                  <ul class="navbar-nav">
                    @forelse($category as $cat)
                    <li class="nav-item">
                      <a
                        class="nav-link dropdown-toggle categorybutton" href="{{ route('subcategory.list',['category_id' =>$cat->id]) }}"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <img
                          class="side-nav-icon"
                          src="{{ asset('./../../albaik/uploads/category') }}/{{ $cat->image }}"
                          alt=""
                        />
                        {{ $cat->category_name }}
                      </a>
                      @if($cat->sub_category)

                      <ul class="dropdown-menu">
                        @foreach ($cat->sub_category as $subcat)
                        <li>
                            <a class="dropdown-item" href="{{ route('category.index') }}"
                              ><img
                                class="side-nav-icon"
                                src="{{ asset('./../../albaik/uploads/category') }}/{{ $subcat->image }}"
                                alt=""
                              />{{ $subcat->subcategory_name }}
                            </a>
                          </li>
                        @endforeach
                      </ul>
                      @endif
                    </li>
                    @empty
                    @endforelse
                  </ul>
                </div>
              </div>
            </div>

            <script>
                $('.categorybutton').click(function(){
                    window.location=$(this).attr('href');
                })
            </script>
