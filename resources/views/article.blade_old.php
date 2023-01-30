@extends('layouts.app')
@extends('layout')

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
                                        <h3 style="text-align:center">{{ $element->title}}</h3>
                                    </div>
                                    <div class="row-3" id="">
                                        <img class="image-flud" src="{{asset('storage/images/'.$element->file) }}"
                                             alt="blog-img" width="1000px">
                                    </div>
                                    <div class="row-3" id="description">
                                        <p style="tab-size: 20px">{{ $element->description}}</p>
                                    </div>
                                    <p>{{ $element->content}}</p>
                                    <hr>
                                    <div class="row-3" id="date">
                                        <p>Дата публикации: <b>{{ $element->date}} </b></p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" id="update">
                                                Изменить
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" name="delete"
                                                    id="delete">Удалить
                                            </button>
                                        </div>

                                        <small class="text-muted">9 mins</small>
                                    </div>
                                    <hr>

                                    <div class="container mt-3" style="display: none" id="form1">
                                        <form method="post" action="/news/update/{{$element->id}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="container mt-3">
                                                <div class="card" style="">

                                                    <h2 style="text-align: center; padding-top: 30px">Изменить статью
                                                        &#128221;</h2><br>
                                                    <input type="hidden" name="id" id="id" value="{{$element->id}}"/>

                                                    <img src="{{asset('storage/images/'.$element->file) }}"
                                                         style="width: 20%;">
                                                    <div class="mb-3" id="content-style">
                                                        <label for="file" class="form-label" id="text">Выбрать файл
                                                            &#128194;</label>
                                                        <input type="file" name="image" id="image" class="form-control"
                                                               accept=".jpg, .jpeg, .png" placeholder="добавить файл">
                                                    </div>

                                                    <div class="mb-3" id="content-style">
                                                        <label for="title" class="form-label" id="text">Заголовок
                                                            &#128195;</label>
                                                        <textarea class="form-control" name="title" id="title" rows="1"
                                                                  placeholder="Заголовок статьи">{{$element->title}}</textarea>
                                                    </div>


                                                    <div class="mb-3" id="content-style">
                                                        <label class="form-label" id="text">Описание &#128214;</label>
                                                        <textarea name="description" id="description"
                                                                  class="form-control">{{$element->description}}</textarea>
                                                    </div>

                                                    <div class="mb-3" id="content-style">
                                                        <label class="form-label" id="text">Контент &#128172;</label>
                                                        <textarea name="content" id="content"
                                                                  class="form-control">{{$element->content}}</textarea>
                                                    </div>

                                                    <div class="mb-3" id="content-style">
                                                        <label for="date" class="form-label" id="text">Дата
                                                            &#128197;</label>
                                                        <input type="date" class="form-control" name="date" id="date"
                                                               placeholder="" value="{{$element->date}}">
                                                    </div>
                                                    <br>

                                                    <div class="mb-3" id="content-style">
                                                        <button type="submit" class="btn btn-success" name="submit"
                                                                id="submit">Изменить
                                                        </button>
                                                        <button type="button" class="btn btn-danger" name="cancel"
                                                                id="cancel" style="margin-left: 20px;">Отмена
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary"
                                                                id="comment" style=" margin-left: 20px;">Оставить отзыв
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                @endforeach
                                <div class="card" style="">
                                    <div class="row-3" id="title-comments">
                                        <h2 style="text-align: center">Комментарии &#128584;&#x1f649;&#x1f64a;</h2>
                                    </div>
                                    <hr>
                                    <div class="row-3" id="comments" style="margin-left: 30px">
{{--                                        @foreach($comment as $elem)--}}
{{--                                            <p>{{$elem->comments}}</p>--}}
{{--                                            <p>{{$elem->date}}</p>--}}
{{--                                        @endforeach--}}
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="container mt-3" style="display: none" id="form2">
                                <form method="post" action=" ">
                                    <div class="container mt-3">
                                        <div class="card" style="width:1024px">

                                            <div class="mb-3">
                                                <h3 style="text-align: center; padding-top: 20px">Оставить отзыв
                                                    &#x1f601;</h3><br>
                                            </div>

                                            <div class="mb-3" id="review-div">
                                                <label for="comment" class="form-label" id="text">Отзыв
                                                    &#128172;</label>
                                                <textarea class="form-control" name="comments" id="comments"></textarea>
                                            </div>

                                            <div class="mb-3" id="review-date">
                                                <label for="date" class="form-label" id="text">Дата отзыва
                                                    &#128197;</label>
                                                <input type="date" class="form-control" name="dates" id="dates"
                                                       placeholder="">
                                            </div>


                                            <div class="mb-3" id="commit-div">
                                                <button type="button" class="btn btn-success" name="comment_sub"
                                                        id="comment_sub">Добавить
                                                    &#128192;
                                                </button>
                                                <button type="button" class="btn btn-danger" name="com_cancel"
                                                        id="com_cancel" style="margin-left: 20px;"
                                                >Отмена
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(function () {
                $('#update').click(function () {
                    $("#form1").css("display", "block");
                });

                $('#cancel').click(function () {
                    $("#form1").css("display", "none");
                })

                $('#delete').click(function () {
                    let id = $('#id').val();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{url('/news/delete')}}",
                        method: "post",
                        data: {
                            'id': id,
                        },
                        // dataType: "json",
                        success: function (response) {
                            alert("Отправка");
                            console.log(response);
                        }
                    });
                });


                $('#comment').click(function () {
                    $("#form2").css("display", "block");
                });

                $('#comment_sub').click(function () {
                    // $("#form2").css("display", "block");
                    let id = $('#id').val();
                    let comments = $('#comments').val();
                    let date = $('#dates').val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{url('/news/comment')}}",
                        method: "post",
                        data: {
                            'id': id,
                            'comments': comments,
                            'date': date

                        },
                        // dataType: "json",
                        success: function (response) {
                            alert("Отправка");
                            console.log(response);
                        }
                    });
                });


                $('#com_cancel').click(function () {
                    $("#form2").css("display", "none");
                })


            });
        </script>

        @include('footer')
    </main>

@endsection
