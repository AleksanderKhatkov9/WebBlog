<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     *
     */

    public function save(Request $request)
    {
        $valid = $request->validate([
            'comments' => 'required|min:4|max:40',
            'date' => 'required|min:15|max:500',
        ]);


        if ($request->ajax()) {
            $comment = new Comments();
            $id = $request->input('id');
            $comment = $request->input('comments');
            $date = $request->input('date');
            $res = array("comment" => $comment, "date" => $date);
            DB::table('comments')->insert($res);

            return "True request-2";
        }
        return response()->redirectTo('/');

//        return view('article', ['post' => $comment]);

    }






}
