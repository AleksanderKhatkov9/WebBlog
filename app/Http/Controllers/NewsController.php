<?php

/**
 * @author Hatkov Aleksander
 * этот класс отвечает за сохранения файлов от модели в формы
 * this class is responsible for collecting model and shape files
 */

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Отображает список ресурсов
     * Show list news page
     */

    public function index()
    {
        $post = News::paginate(2);
        return view('home', ['post' => $post]);
    }

    public function store(Request $request)
    {
        return view('news');
    }

    public function create(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|min:4|max:500',
            'description' => 'required|min:15|max:500'
        ]);

        $news = new News();
        $path_file = 'public/images';
        $image_name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs($path_file, $image_name);
        $news->file = $request->file('image')->getClientOriginalName();
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->content = $request->input('content');
        $news->date = $request->input('date');
        $news->save();
        return response()->redirectTo('/');
    }

    public function article(Request $request)
    {
        $post = new News();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $post = DB::select('select * from news where id =:id', ['id' => $id]);
//            $comment = DB::select('select * from comments where id =:id', ['id' => $id]);
        }
        return view('article', ['post' => $post]);
    }

    /**
     * Обновляет указанный ресурс в хранилище
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     *
     */

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:4|max:500',
            'description' => 'required|min:15|max:500',
            'content' => 'required|min:15|max:1000',
        ]);

        $path_file = 'public/images';
        $image_name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs($path_file, $image_name);
        $file = $request->file('image')->getClientOriginalName();
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $date = $request->input('date');
        $article = DB::update('update news set file = ?,
        title=?,description=?,content=?, date=? where id = ?', [$file, $title, $description, $content, $date, $id]);

        return response()->redirectTo('/');

    }

    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->input('id');
            DB::delete('delete from news where id =:id', ['id' => $id]);
            return "True request!";
        }
        return response()->redirectTo('/');
    }


//    public function save(Request $request)
//    {
//
//        if ($request->ajax()) {
//
//            $id = $request->input('id');
//            $comment = $request->input('comments');
//            $date = $request->input('date');
//            $res = array("comment" => $comment, "date" => $date);
//            DB::table('comments')->insert($res);
//
//            return "True request-2";
//        }
//
//        return response()->redirectTo('/');
//    }


    public function search(Request $request)
    {
        $val = $request->val;
//        $post = News::where('title', 'LIKE', "%{$val}%")->orderBy('title')->get();
        $post = News::where('title', 'LIKE', "%{$val}%")->orderBy('title')->get();

//        dd($post);

        return view('home', compact('post', $post));


    }

    public function start()
    {
        return view('admin');
    }

    public function runTemplate()
    {
        return view('show');
    }


}
