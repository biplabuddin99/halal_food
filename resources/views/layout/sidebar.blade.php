    <!-- nav start -->
    <nav class="navbar navbar-expand-lg bg-light shadow sticky-top">
        <div class="container">
          <div class="mobile-nav-btn">
            <div class="start-btn">
              <button type="button" onclick="leftNavS()" class="btn btn-light">
                <i class="bi bi-list"></i>
              </button>
            </div>
            <div class="close-btn">
              <button type="button" onclick="leftNavC()" class="btn btn-light">
                <i class="bi bi-x-lg"></i>
              </button>
            </div>
          </div>

          <a href="#">
            <div class="nav-logo">
              <img
                class="navbar-brand img-fluid bg-dark rounded"
                src="{{ asset('assets/resource') }}/img/logo.png"
                alt="logo"
              />
            </div>
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="bi bi-search"></span>
          </button>

          <div
            class="collapse mobile-bg navbar-collapse p-3"
            id="navbarSupportedContent"
          >
            <div class="nav-search mobile-bg">
              <div class="input-group input-group-sm my-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="ex: enter your Products..."
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm"
                />
                <span class="input-group-text" id="inputGroup-sizing-sm"
                  ><i class="bi bi-search"></i
                ></span>
              </div>
            </div>
          </div>
          <div class="ms-auto customer-seciton mobile-bg p-1">
              <div class="dropdown">
                  <a class="" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-person-circle"></i>
                  </a>
                  <ul class="dropdown-menu bg-info" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Order</a></li>
                    <li><a class="dropdown-item" href="{{ route('logOut') }}">Logout</a></li>
                  </ul>
                  <a href="#"><i class="bi bi-truck"></i></a>
                    <a href="#"><i class="bi bi-heart"></i></a>
                    <a href="{{ route('cart.page') }}"><i class="bi bi-basket"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                        </span>
                    </a>
              </div>
            {{-- <a href="#"><i class="bi bi-person-circle"></i></a> --}}

          </div>
        </div>
    </nav>
      <!-- nav end -->
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
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a
                        class="nav-link dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <img
                          class="side-nav-icon"
                          src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                          alt=""
                        />
                        Beef Meat
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="{{ route('category.index') }}"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Category
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 2
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 3
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 1
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 1
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <img
                          class="side-nav-icon"
                          src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                          alt=""
                        />
                        Beef Meat
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 1
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 2
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 3
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 1
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            ><img
                              class="side-nav-icon"
                              src="{{ asset('assets/resource') }}/img/icon/chili-pepper.png"
                              alt=""
                            />Sub 1
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
