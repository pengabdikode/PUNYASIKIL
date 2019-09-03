@extends('site.app')
@section('title', 'Homepage')
@section('content')
    {{-- <div class="owl-carousel owl-theme">
    <div class="item"><img src="{{asset('uploads/slider1.jpg')}}" alt="sa"></div>
        <div class="item"><img src="{{asset('uploads/slider2.jpg')}}" alt="sd"></div>
        <div class="item"><img src="{{asset('uploads/slider3.jpg')}}" alt="ds"></div> --}}
    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('uploads/slider1.png')}}" alt="sa">
          </div>
          <div class="carousel-item">
            <img src="{{asset('uploads/slider2.png')}}" alt="sd">
          </div>
          <div class="carousel-item">
            <img src="{{asset('uploads/slider3.png')}}" alt="ds">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

@stop
