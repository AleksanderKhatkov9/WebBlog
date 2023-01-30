@extends('layouts.app')
@extends('layout')


<style>
    #title {
        margin-top: 10px;
        text-align: center;
    }
</style>

@section('content')
    <main>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{asset('storage/images/blog.jpg') }}" alt="blog"
                                 class="bd-placeholder-img card-img-top" width="100%" height="400">

                            <div class="card-body">
                                @foreach($post as $element)
                                    <div class="row-3" id="title">
                                        <a href="/article?id={{ $element->id}}"><h3 id="title">{{ $element->title}}</h3>
                                        </a>
                                    </div>

                                    <div class="row-3" id="">
                                        <img class="image-flud" src="{{asset('storage/images/'.$element->file) }}"
                                             alt="blog-img" width="1000px">
                                    </div>

                                    <div class="row-3" id="description">
                                        <p style="tab-size: 20px">{{ $element->description}}</p>
                                    </div>

                                    <hr>
                                    <div class="row-3" id="date">
                                        <p>Дата публикации: <b>{{ $element->date}} </b></p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group" id="button">
                                            <a href="/article?id={{ $element->id}}" class="btn btn-outline-success"
                                               style="font-weight: bold">Читать далее &#x27a2;</a>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>

                            <div class="">
                                {{$post->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </main>
@endsection


