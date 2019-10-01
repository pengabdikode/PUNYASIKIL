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
                  <div class="col-md-12">
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
                
                  <!-- col.// -->
              </div>
          </div>
          <!-- container .//  -->
      </section>
      <!-- ========================= Blog ========================= -->
    <section class="section-content padding-y-sm bg">
            <div class="hero-image">
      <div class="container">
          
   
          <div class="row">
              <div class="col-md-4">
                  <div class="card-banner" style="height:250px; background-image: url('images/posts/1.jpg');">
                      <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                          <div class="text-center">
                              <h5 class="card-title">Limited</h5>
                              <span style="color: #fee600;"><i class="fas fa-thumbs-up fa-3x"></i></span>
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
                              <span style="color: #fee600;"><i class="far fa-check-circle fa-3x"></i></span>
                          </div>
                      </article>
                  </div>
                  <!-- card.// -->
              </div>
              <div class="col-md-4">
                  <div class="card-banner" style="height:250px; background-image: url('us/kotak.png');">
                      <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                          <div class="text-center">
                              <h5 class="card-title">Warranty</h5>
                              <span style="color: #fee600;"><i class="far fa-smile fa-3x"></i></span>
                          </div>
                      </article>
                  </div>
                  <!-- card.// -->
              </div>

          </div>
          </div>
      </div>
  </section>
  <!-- ========================= Blog .END// ========================= -->
  <section class="section-content padding-y-sm bg">
        <div class="container">

            <header class="section-heading heading-line text-center">
                <h4 class="title-section"><span class="brushstroke">Featured Products</span></h4>
            </header>
            <div class="row">
                @foreach ($products as $item)
                @if ($item->featured == 1)
                <div class="col-md-4">
                    <figure class="card card-product">
                        @if ($item->images->count() > 0)
                        @foreach($item->images as $image)
                        <div class="img-wrap"><img src="{{ asset('storage/'.$image->full) }}"></div>
                        @endforeach
                        @else
                        <div class="img-wrap"><img src="https://via.placeholder.com/176"></div>
                        @endif
                        <figcaption class="info-wrap">
                            <h4 class="title"  style="text-align:center"><span class="brushstroke">{{$item->name}}</span></h4>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="{{ route('product.show', $item->slug) }}" class="btn btn-sm btn-primary float-right">Details</a>
                            <div class="price-wrap h5">
                            @if ($item->sale_price > 0)
                            <span class="price-new">{{$item->sale_price}}</span> <del class="price-old">{{$item->price}}</del>
                            @else
                            <span class="price-new">{{$item->price}}</span>
                            @endif
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                @endif
                @endforeach
            </div>    
        </div>
  </section>    
@stop
