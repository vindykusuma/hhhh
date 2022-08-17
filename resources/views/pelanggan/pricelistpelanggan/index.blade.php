@extends('layouts.main')
@section('judul','Pricelist')
@section('content')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <div class="col-lg-12 py-5">
          <h2>Pricelist</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="imgprice">
                <img src="{{ asset('admin/img/portfolio/bg1.jpg')}}" class="img-fluid" alt="Responsive image">
              </div>
              <h4><a href="/pricelisttampil">Wedding</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
                <div class="imgprice">
                    <img src="{{ asset('admin/img/portfolio/couple1.jpg')}}" class="img-fluid" alt="Responsive image">
                  </div>
              <h4><a href="">Prewedding</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
                <div class="imgprice">
                    <img src="{{ asset('admin/img/portfolio/family8.jpg')}}" class="img-fluid" alt="Responsive image">
                  </div>
              <h4><a href="">Family</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
                <div class="imgprice">
                    <img src="{{ asset('admin/img/portfolio/photoshot10.jpg')}}" class="img-fluid" alt="Responsive image">
                  </div>
              <h4><a href="">Photoshot</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
                <div class="imgprice">
                    <img src="{{ asset('admin/img/portfolio/couplebaru1.jpg')}}" class="img-fluid" alt="Responsive image">
                  </div>
              <h4><a href="">Couple</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
                <div class="imgprice">
                    <img src="{{ asset('admin/img/portfolio/group.jpg')}}" class="img-fluid" alt="Responsive image">
                  </div>
              <h4><a href="">Event</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
@endsection
