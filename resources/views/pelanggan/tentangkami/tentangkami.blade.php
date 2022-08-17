@extends('layouts.main')
@section('judul','Tentang Kami')
@section('content')
<section id="about" class="about">

    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <div class="row">
            <div class="col-lg-12 py-5">
        <h2>Tentang Kami</h2>

      <div class="row">
        <div class="col-lg-3">
          <img src="{{ asset('admin/img/logo.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-6 content">
          <h3>Sejarah Phi Photograph</h3>
          <p class="fst-italic" >
            Phi Photograph merupakan salah satu jasa foto freelancer yang aktif di Kota Nganjuk, Jawa Timur. </p>
            <p>Tim yang beranggotakan 4 orang yang masing-masing memiliki pengalaman dalam bidang fotografi dan multimedia yang dimiliki.
            Phi Photograph menyediakan berbagai paket foto yang menarik sehingga banyak anak muda dan orang tua merasa puas dengan hasil yang diberikan.
            Saat ini Phi Photograph sedang mengupgrade teknologi yang dimilikinya salah satunya website yang menyediakan layanan pemesanan sehingga memudahkan Phi Photograph berkomunikasi dengan pelanggan setia mereka.
          </p>
        </div>
      </div>
  </section>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Galeri</h2>
          </div>
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="col-lg-3 mx-auto">
                  <img src="{{ asset('admin/img/testimonials/testimonials-1.jpg') }}" class="img-fluid"  alt="Responsive image">
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="col-lg-3 mx-auto">
                  <img src="{{ asset('admin/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                </div>
              </div><!-- End testimonial item -->
{{--
              <div class="swiper-slide">
                <div class="col-lg-3 d-block">
                  <img src="{{ asset('admin/img/portfolio/bg1.jpg') }}" class="testimonial-img" alt="">
                </div>
              </div><!-- End testimonial item --> --}}

              <div class="swiper-slide">
                <div class="col-lg-3 mx-auto">
                  <img src="{{ asset('admin/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="col-lg-3 mx-auto">
                  <img src="{{ asset('admin/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->
@endsection
