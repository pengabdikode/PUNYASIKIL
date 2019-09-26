@extends('site.app')
@section('title', 'Homepage')
@section('content')
    {{-- <div class="owl-carousel owl-theme">
    <div class="item"><img src="{{asset('uploads/slider1.png')}}" alt="sa"></div>
        <div class="item"><img src="{{asset('uploads/slider2.png')}}" alt="sd"></div>
        <div class="item"><img src="{{asset('uploads/slider3.png')}}" alt="ds"></div> --}}
    
        <section class="section-main bg padding-top-sm">
          <div class="container">
              <div class="row">
                  <div class="col-md-9">
                      <!-- ================= main slide ================= -->
                      <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                          <div class="item-slide">
                              <img src="{{asset('uploads/slider1.png')}}">
                          </div>
                          <div class="item-slide rounded">
                              <img src="{{asset('uploads/slider2.png')}}">
                          </div>
                          <div class="item-slide rounded">
                              <img src="{{asset('uploads/slider3.png')}}">
                          </div>
                      </div>
                      <!-- ============== main slidesow .end // ============= -->
                  </div>
                  <!-- col.// -->
                  <div class="col-md-3">
                      <div class="card mt-2 mb-2">
                          <figure class="itemside">
                              <div class="aside">
                                  <div class="img-wrap img-sm border-right"><img src="images/items/3.jpg"></div>
                              </div>
                              <figcaption class="p-3">
                                  <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                  <div class="price-wrap">
                                      <span class="price-new b">$1280</span>
                                      <del class="price-old text-muted">$1980</del>
                                  </div>
                                  <!-- price-wrap.// -->
                              </figcaption>
                          </figure>
                      </div>
                      <!-- card.// -->
                      <div class="card mb-2">
                          <figure class="itemside">
                              <div class="aside">
                                  <div class="img-wrap img-sm border-right"><img src="images/items/3.jpg"></div>
                              </div>
                              <figcaption class="p-3">
                                  <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                  <div class="price-wrap">
                                      <span class="price-new b">$1280</span>
                                      <del class="price-old text-muted">$1980</del>
                                  </div>
                                  <!-- price-wrap.// -->
                              </figcaption>
                          </figure>
                      </div>
                      <!-- card.// -->
                      <div class="card mb-2">
                          <figure class="itemside">
                              <div class="aside">
                                  <div class="img-wrap img-sm border-right"><img src="images/items/3.jpg"></div>
                              </div>
                              <figcaption class="p-3">
                                  <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                  <div class="price-wrap">
                                      <span class="price-new b">$1280</span>
                                      <del class="price-old text-muted">$1980</del>
                                  </div>
                                  <!-- price-wrap.// -->
                              </figcaption>
                          </figure>
                      </div>
                      <!-- card.// -->
                  </div>
                  <!-- col.// -->
              </div>
          </div>
          <!-- container .//  -->
      </section>
      <!-- ========================= Blog ========================= -->
    <section class="section-content padding-y-sm bg">
      <div class="container">
          <header class="section-heading heading-line">
              <h4 class="title-section"><span class="brushstroke">Our Services</span></h4>
          </header>
          <div class="row">
              <div class="col-md-4">
                  <div class="card-banner" style="height:250px; background-image: url('images/posts/1.jpg');">
                      <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                          <div class="text-center">
                              <h5 class="card-title">Limited</h5>
                              <a href="#" class="btn btn-warning btn-sm"> View All </a>
                          </div>
                      </article>
                  </div>
                  <!-- card.// -->
              </div>
              <div class="col-md-4">
                  <div class="card-banner" style="height:250px; background-image: url('images/posts/2.jpg');">
                      <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                          <div class="text-center">
                              <h5 class="card-title">Original Product</h5>
                              <a href="#" class="btn btn-warning btn-sm"> View All </a>
                          </div>
                      </article>
                  </div>
                  <!-- card.// -->
              </div>
              <div class="col-md-4">
                  <div class="card-banner" style="height:250px; background-image: url('images/posts/3.jpg');">
                      <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                          <div class="text-center">
                              <h5 class="card-title">Warranty</h5>
                              <a href="#" class="btn btn-warning btn-sm"> View All </a>
                          </div>
                      </article>
                  </div>
                  <!-- card.// -->
              </div>

          </div>
      </div>
  </section>
  <!-- ========================= Blog .END// ========================= -->

@stop
