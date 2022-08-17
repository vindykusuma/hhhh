@extends('layouts.main')
@section('judul','Portofolio')
@section('content')
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <div class="col-lg-12 py-5">
        <h2>Portofolio</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-wedding">Wedding</li>
            <li data-filter=".filter-prewedding">Prewedding</li>
            <li data-filter=".filter-photoshot">Photoshot</li>
            <li data-filter=".filter-family">Family</li>
            <li data-filter=".filter-couple">Couple</li>
            <li data-filter=".filter-event">Event</li>

          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/bg1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Wedding 1</h4>
              <p>Wedding</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/bg1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wedding 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-photoshot">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/bg3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Photoshot 1</h4>
              <p>Photoshot</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/bg3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photoshot 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/bg2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Wedding 2</h4>
              <p>Wedding</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/bg2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wedding 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/wedding3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Wedding 3</h4>
                <p>Wedding</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/wedding3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wedding 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-couple">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/couple1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Couple 1</h4>
              <p>Couple</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/couple1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Couple 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-couple">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/couple4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Couple 2</h4>
                <p>Couple</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/couple4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Couple 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-couple">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/couple9.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Couple 3</h4>
                <p>Couple</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/couple9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Couple 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-couple">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/couple11.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Couple 4</h4>
                <p>Couple</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/couple11.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Couple 4"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-couple">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/couple13.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Couple 5</h4>
                <p>Couple</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/couple3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Couple 5"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/wedding1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Wedding 4</h4>
              <p>Wedding</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/wedding1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wedding 4"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/wedding2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Wedding 5</h4>
              <p>Wedding</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/wedding2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wedding 5"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/wedding4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Wedding 6</h4>
              <p>Wedding</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/wedding4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wedding 6"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-photoshot">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/photoshot5.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Photoshot 2</h4>
              <p>Photoshot</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/photoshot5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photoshot 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-photoshot">
          <div class="portfolio-wrap">
            <img src="{{ asset('admin/img/portfolio/photoshot3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Photoshot 3</h4>
              <p>Photoshot</p>
              <div class="portfolio-links">
                <a href="{{ asset('admin/img/portfolio/photoshot3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photoshot 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-photoshot">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/photoshot4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Photoshot 4</h4>
                <p>Photoshot</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/photoshot4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photoshot 4"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-event">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/event1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Event 1</h4>
                <p>Event</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/event1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Event 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-event">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/event3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Event 2</h4>
                <p>Event</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/event3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Event 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-event">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/portfolio/event4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Event 3</h4>
                <p>Event</p>
                <div class="portfolio-links">
                  <a href="{{ asset('admin/img/portfolio/event4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Event 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

      </div>

    </div>
  </section>

@endsection
