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

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8"
                src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

        <div class="container" style="display: block" id="form1">
            <button type="button" class="btn btn-success" id="addUser">Add Users</button>
            <table id="table_id" class="display">
                <thead>
                <tr>
                    <th>N</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Actions</th>
                    <th></th>
                </tr>

                </thead>
                <tbody>
                @foreach($list as $element)
                    <tr>
                        <td>{{$element ->id}}</td>
                        <td>{{$element ->name}}</td>
                        <td>{{$element ->password}}</td>
                        <td>{{$element ->email}}</td>
                        <td>
                            <a href="/edit?id={{ $element->id}}">
                                <button type="button" class="btn btn-success" name="update" id="update">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="/users/delete" method="post">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{$element->id}}"/>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div content="container" style="display: none" id="form2">
            <form action="/users/save" method="post" enctype="multipart/form-data" style="margin-left: 30%;">
                @csrf
                <div class="mb-3" style="width: 30%;">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                </div>

                <div class="mb-3" style="width: 30%;">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3" style="width: 30%;">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </main>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });

        $('#addUser').click(function () {
            $("#form1").css("display", "none");
            $("#form2").css("display", "block");
        });
    </script>

    <br><br>
    @include('footer')
@endsection
