@extends('layouts.app')
@extends('layout')

@section('content')
    <section id="container">
        <div class="wrap-container">
            <!-----------------Content-Box-------------------->
            <div id="main-content">
                <div class="wrap-content">
                    <div class="">
                        <article class="single-post zerogrid">
                            <div class="row wrap-post"><!--Start Box-->
                                <div class="entry-header">
                                    <span class="time">June 26, 2013  by admin</span>
                                    <h2 class="entry-title"><a href="#">RETRO GALLERY: FRAGMENTING PERSISTENT FLIGHT AND
                                            PATHOLOGY</a></h2>
                                    <span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
                                </div>
                                <div class="post-thumbnail-wrap">
                                    <img src="images/slide2.jpg">
                                </div>
                                <div class="">
                                    <div class="album py-5 bg-light">
                                        <div class="container">
                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <div class="card-body">
                                                            @foreach($post as $element)
                                                                <div class="row-3" id="title">
                                                                    <a href="/article?id={{ $element->id}}"><h3
                                                                            id="title">{{ $element->title}}</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="row-3" id="">
                                                                    <img class="image-flud"
                                                                         src="{{asset('storage/images/'.$element->file) }}"
                                                                         alt="blog-img" width="1000px">
                                                                </div>

                                                                <div class="row-3" id="description">
                                                                    <p style="tab-size: 20px">{{ $element->description}}</p>
                                                                </div>
                                                                <hr>
                                                                <div class="row-3" id="date">
                                                                    <p>Дата публикации: <b>{{ $element->date}} </b></p>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="btn-group" id="button">
                                                                        <a href="/article?id={{ $element->id}}"
                                                                           class="btn btn-outline-success"
                                                                           style="font-weight: bold">Читать далее
                                                                            &#x27a2;</a>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$post->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
    <script src="{{ asset("assets/js/owl.carousel.js") }}" type="text/javascript"></script>
    {{--<script src="owl-carousel/owl.carousel.js"></script>--}}
    <script>
        $(document).ready(function () {
            $("#owl-slide").owlCarousel({
                autoPlay: 3000,
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1],
                navigation: true,
                navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                pagination: false
            });
        });
    </script>

    </div>
    </body>
    </html>
@endsection
