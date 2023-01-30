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
            @foreach($post as $element)
        <div class="form-div">
            <form method="post" action="/users/update" enctype="multipart/form-data">
                @csrf
                <br>
                <div class="container mt-3">
                    <div class="mb-3" style="width: 30%;">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="hidden" name="id" id="id" value="{{$element->id}}"/>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$element->name}}">
                    </div>

                    <div class="mb-3" style="width: 30%;">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{$element->email}}">
                    </div>
                    <div class="mb-3" style="width: 30%;">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="{{$element->password}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>

            <br> <br> <br>

        </div>
            @endforeach
    </main>

    <script>
        $('#delete').click(function () {
            let id = $('#delete').val();
            alert(id);
        });
    </script>


    @include('footer')
@endsection

