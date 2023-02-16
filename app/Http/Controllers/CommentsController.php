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

    public function index()
    {
        $comment = Comments::find(2);
        dd($comment);
        return view('article', compact('comment'));
    }


    public function show()
    {


    }

    public function create(Request $request)
    {
        $request->validate([
            'comments' => 'required|min:4|max:40',
            'date' => 'required|min:15|max:500',
        ]);

        $comment = new Comments();
        if ($request->ajax()) {
            $comment = $request->input('id');
            $comment = $request->input('comments');
            $comment = $request->input('date');
            $comment->save();
            return "True request-2";
        }
        //return response()->redirectTo('/');
        return view('article', ['post' => $comment]);
    }


    public function store()
    {
    }


}
