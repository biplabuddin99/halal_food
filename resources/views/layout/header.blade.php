<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halal meat</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/resource') }}/css/main.css" />
    <link rel="stylesheet" href="{{ asset('assets/resource') }}/css/category.css" />
    <link rel="stylesheet" href="{{ asset('assets/resource') }}/css/child-category.css" />
    <!-- Bootstrp 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!-- Bootsrap 5 Icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- ========= header start ============ -->

    <section class="header brand-color w-100">
      <!-- logo div -->
      <div class="container py-4">
        <div class="row header-top">
          <div class="col-sm-4">
            <p>
              647-352-5009 <br />
              <span>310 DANFORTH AVENUE</span>
            </p>
          </div>
          <div class="col-sm-4 text-center">
            <a href="#">
              <img
                class="img-fluid main-logo"
                src="{{ asset('assets/resource') }}/img/logo.png"
                alt="logo"
              />
            </a>
          </div>
          <div class="col-sm-4 d-flex justify-content-end header-right-logo">
            <img
              class="img-fluid"
              src="{{ asset('assets/resource') }}/img/halal.png"
              alt="Halal Food"
            />
          </div>
        </div>
      </div>
      <!-- logo end -->
    </section>
