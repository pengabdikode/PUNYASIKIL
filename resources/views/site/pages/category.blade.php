@extends('site.app')
@section('title', $category->name)
@section('content')
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">{{ $category->name }}</h2>
    </div>
</section>
<section class="section-content bg padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-sm-3">

                <div class="card card-filter">
                    <article class="card-group-item">
                        <header class="card-header">
                            <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Category</h6>
                            </a>
                        </header>
                        <div style="" class="filter-content collapse show" id="collapse22">
                            <div class="card-body">
                                <form class="pb-3">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search" type="text">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <ul class="list-unstyled list-lg">
                                    <li><a href="#">Cras justo odio <span class="float-right badge badge-light round">142</span> </a></li>
                                    <li><a href="#">Dapibus ac facilisis  <span class="float-right badge badge-light round">3</span>  </a></li>
                                    <li><a href="#">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a></li>
                                    <li><a href="#">Another item <span class="float-right badge badge-light round">12</span>  </a></li>
                                </ul>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse33">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Price  </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse33">
                            <div class="card-body">
                                <input type="range" class="custom-range" min="0" max="100" name="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="form-group text-right col-md-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div>
                                <!-- form-row.// -->
                                <button class="btn btn-block btn-outline-primary">Apply</button>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                </div>
                <!-- card.// -->

            </aside>
            <!-- col.// -->
           
            <main class="col-sm-9">
                @forelse($category->products as $product)
                <article class="card card-product">
                    <div class="card-body">
                        <div class="row">
                            <aside class="col-sm-3">
                                @if ($product->images->count() > 0)
                                <div class="img-wrap"><img src="{{ asset('storage/'.$product->images->first()->full) }}"></div>
                                @else
                                <div class="img-wrap"><img src="https://via.placeholder.com/176"></div>
                                @endif
                            </aside>
                            <!-- col.// -->
                            <article class="col-sm-6">
                                    <h4 class="title"><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h4>
                            <p>{{$product->description}}</p>
                            </article>
                            <!-- col.// -->
                            <aside class="col-sm-3 border-left">
                                <div class="action-wrap">
                                    @if ($product->sale_price != 0)
                                    <div class="price-wrap h4">
                                        <span class="price">{{ config('settings.currency_symbol').$product->sale_price }}</span>
                                        <del class="price-old">{{ config('settings.currency_symbol').$product->price }}</del>
                                    </div>
                                    @else
                                    <div class="price-wrap h4">
                                            <span class="price">{{ config('settings.currency_symbol').$product->price }}</span>
                                    </div>
                                    @endif
                                    <!-- info-price-detail // -->
                                    <p class="text-success">Free shipping</p>
                                    <br>
                                    <p>
                                    <a href="{{url('/cart/add')}}/{{$product->id}}" class="btn btn-primary"> Add To Cart </a>
                                        <a href="#" class="btn btn-secondary"> Details  </a>
                                    </p>
                                </div>
                                <!-- action-wrap.// -->
                            </aside>
                            <!-- col.// -->
                        </div>
                        <!-- row.// -->
                    </div>
                    <!-- card-body .// -->
                </article>
                <!-- card product .// -->
                @empty
                <p>No Products found in {{ $category->name }}.</p> 
                @endforelse
            </main>
            
        </section>
@stop