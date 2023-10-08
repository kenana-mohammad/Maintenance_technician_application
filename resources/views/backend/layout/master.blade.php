<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('backend.layout.head')

    <!-- ========== All CSS files linkup ========= -->

  </head>
  <body>
    <!-- ======== Preloader =========== -->
  
    <!-- ======== Preloader =========== -->
    <main class="main-wrapper">

    <!-- ======== sidebar-nav start =========== -->
    @include('backend.layout.sidebar')

    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    @include('backend.layout.nav')

      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
        <!-- ========== section start ========== -->
        <section class="section ">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Mangment Maintenance technician</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6 ">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          @yield('content')

          <!-- ========== title-wrapper end ========== -->
   <!-- include js -->
   @include('backend.layout.footer')

 <!-- ========== footer start =========== -->
 <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div class="terms d-flex justify-content-center justify-content-md-end">
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>    </body>