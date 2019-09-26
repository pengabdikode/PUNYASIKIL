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
                                <ul class="list-unstyled list-lg">
                                    @foreach($categories as $cate)
                                        @foreach($cate->items as $categorys)
                                            @if ($categorys->items->count() > 0)
                                                <li>
                                                    <a class="stroke" href="{{ route('category.show', $categorys->slug) }}" id="{{ $categorys->slug }}"
                                                        aria-haspopup="true" aria-expanded="false">{{ $categorys->name }}</a>
                                                    <div class="dropdown-menu" aria-labelledby="{{ $categorys->slug }}">
                                                        @foreach($categorys->items as $item)
                                                            <a class="dropdown-item" href="{{ route('category.show', $item->slug) }}">{{ $item->name }}</a>
                                                        @endforeach
                                                    </div>
                                                </li>
                                                @else
                                                    <li class="stroke">
                                                        <a class="stroke" href="{{ route('category.show', $categorys->slug) }}">{{ $categorys->name }}<span class="float-right badge badge-light round">{{$categorys->products->count()}}</span></a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endforeach
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
                                    <h4 class="title"><a href="{{ route('product.show', $product->slug) }}"><span class="brushstroke">{{ $product->name }}</span></a></h4>
                            <p>{{$product->description}}</p>
                            </article>
                            <!-- col.// -->
                            <aside class="col-sm-3 border-left">
                                <div class="action-wrap">
                                    @if ($product->sale_price != 0)
                                    <div class="price-wrap h4">
                                        <span class="price text-success">{{ config('settings.currency_symbol').$product->sale_price }}</span>
                                        <del class="price-old"> {{ config('settings.currency_symbol').$product->price }}</del>
                                    </div>
                                    @else
                                    <div class="price-wrap h4">
                                            <span class="price">{{ config('settings.currency_symbol').$product->price }}</span>
                                    </div>
                                    @endif
                                    <!-- info-price-detail // -->
                                    <br>
                                    <p>
                                        <a href="{{ route('product.show', $product->slug) }}" class="btn btn-secondary"> Details  </a>
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