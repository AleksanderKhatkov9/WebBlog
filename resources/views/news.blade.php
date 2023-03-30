
@extends('layouts.app')
@extends('layout')

@section('content')
    <main>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-div">
            <form method="post" action="/news/save" enctype="multipart/form-data">
                @csrf
                <br>
                <div class="container mt-3">
                    <div class="" style="width:1200px">
                        <h2 style="text-align: center; padding-top: 30px">Добавить статью &#128221;</h2><br>
                        <div class="mb-3" id="content-style">
                            <label for="file" class="form-label" id="text">Выбрать файл &#128194;</label>
                            <input type="file" name="image" class="form-control" accept=".jpg, .jpeg, .png" placeholder="добавить файл" style="width: 30%">
                        </div>

                        <div class="mb-3" id="content-style">
                            <label for="title" class="form-label" id="text">Заголовок &#128195;</label>
                            <textarea class="form-control" name="title" id="title" rows="1" placeholder="Заголовок статьи" style="width: 100%; height: 10%"></textarea>
                        </div>

                        <div class="mb-3" id="content-style">
                            <label class="form-label" id="text">Описание &#128214;</label>
                            <textarea name="description" id="description" class="form-control" style="width: 100%; height: 30%"></textarea>
                        </div>

                        <div class="mb-3" id="content-style">
                            <label class="form-label" id="text">Контент &#128172;</label>
                            <textarea name="content" id="content" class="form-control" style="width: 100%; height: 50%"></textarea>
                        </div>

                        <div class="mb-3" id="content-style" style="width: 30%">
                            <label for="date" class="form-label" id="text">Дата &#128197;</label>
                            <input type="date" class="form-control" name="date" id="date" placeholder="">
                        </div>
                        <br>

                        <div class="mb-3" id="content-style">
                            <button type="submit" class="btn btn-outline-success" name="submit" id="submit"
                                    style="font-weight: bold ">Отправить &#128190;
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <br> <br> <br>
        </div>
    </main>

    <script>
        $('.btn').click(function(){
            $(".block_with_text").fadeToggle(100);
        });
    </script>


    @include('footer')
@endsection

