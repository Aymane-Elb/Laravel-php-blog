@extends('layouts.app')

@section('content')
<section class="hero" style="margin-top: -68px; background: black; overflow: hidden;">
    <div class="container">
        <div class="hero__slider owl-carousel">
            @foreach ($shows as $show)
                <div class="hero__items set-bg" data-setbg="{{ asset('assets/'. $show->image) }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">{{ $show->genre }}</div>
                                <h2>{{ $show->name }}</h2>
                                <p>{{ $show->description }}</p>
                                <a href="anime-watching.html"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Trending Now</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($trendingShows as $show)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/' . $show->image) }}">
                                        <!-- <div class="ep">{{ $show->duration }}</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>{{ $show->status }}</li>
                                            <li>{{ $show->type }}</li>
                                        </ul>
                                        <h5><a href="{{route('anime.details', $show->id)}}">{{ $show->name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="popular__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Adventure Shows</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($adventureShows as $show)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/'. $show->image) }}">
                                        <!-- <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>{{$show->status}}</li>
                                            <li>{{$show->type}}</li>
                                        </ul>
                                        <h5><a href="{{route('anime.details', $show->id)}}">{{$show->name}}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Recently Added Shows</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($comedyShows as $show)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/'. $show->image) }}">
                                        <!-- <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{route('anime.details', $show->id)}}">{{$show->name}}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="live__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Live Action</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($actionShows as $show)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/'. $show->image) }}">
                                        <!-- <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{route('anime.details', $show->id)}}">{{$show->name}}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <!-- Add content for product__sidebar__view if needed -->
                    </div>
                    <div class="product__sidebar__comment">
                        <div class="section-title">
                            <h5>For You</h5>
                        </div>
                        @foreach($foruShows as $show)
                            <div class="product__sidebar__comment__item">
                                <div  class="product__sidebar__comment__item__pic">
                                    <img src="{{ asset('assets/'. $show->image) }}" alt="imge of the anime {{$show->name}}">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>{{$show->status}}</li>
                                        <li>{{$show->type}}</li>
                                    </ul>
                                    <h5><a href="#">{{$show->name}}</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection