@extends('layouts.app')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Your New Store for selling birds</h1>

      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Poducts</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>commandes:</p>
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">





        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


@foreach ($items as $item)
<div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
        <a href="{{ route('order.create', $item->id)}}">
        <img src="{{ asset('storage/' . $item->Picture) }}" class="img-fluid" alt="{{ $item->Name }}">
        <div class="portfolio-info">
            <h4>{{ $item->Name }}</h4>
            <h4>price:{{ $item->Price }}</h4>
            <h4> in stock:{{ $item->Stock }}</h4>

            <div class="portfolio-links">
                <a href="{{ asset('storage/' . $item->Picture) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $item->Description}}"><i class="bx bx-plus"></i></a>

                </a>
            </div>
            <div class="portfolio-links">
                <a href="{{ route('order.create',$item->id) }}" ><i class="bx bx-plus"></i></a>

                </a>
            </div>
        </div>
    </div>
</div>
@endforeach

    </ul>
</div>
</div>
@endsection
