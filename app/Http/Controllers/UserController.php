<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @todo I need write crud for users table
     * The first I creat function index when return list users in View withe name admin
     * The second I creat function create when to get param with form and admin page aтв return param request in function
     */


    public function index()
    {
        $list = new User();
        return view('admin', ['list' => $list->all()]);
    }

    public function store()
    {

    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:40',
            'email' => 'required|min:10|max:40',
            'password' => 'required|min:4|max:20',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return view('admin', ['list' => $user->all()]);
    }

    public function edit(Request $request)
    {
        $postUser = new User();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $postUser = DB::select('select * from users where id =:id', ['id' => $id]);
        }
        return view('edit', ['post' => $postUser]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:40',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:4|max:20',
        ]);

        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $update = DB::update('update users set name = ?,
        email=?,password=? where id = ?', [$name, $email, $password, $id]);

        return response()->redirectTo('/room');

    }


    public function destroy(Request $request)
    {

        $id = $request->input('id');
        $delete = User::find($id);
        $delete->delete();
        return response()->redirectTo('/room');
    }


}
