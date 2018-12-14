<?php

namespace App\Http\Controllers;

use App\models\blogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Blog extends Controller
{
   
    public function blog()
    {
        $blogs = DB::table('blogs')
            ->select('blog_id', 'name', 'title', 'description', 'blogs.created_at', 'blogs.updated_at')
            ->join('users', 'blogs.user_id', '=', 'users.user_id')
            ->orderBy('blog_id','desc')
            ->paginate(8);
        return view('blogs/blog')->with('blogs', $blogs);
    }
    public function index()
    {
        $blogs = DB::table('blogs')
            ->select('blog_id', 'name', 'title', 'description', 'blogs.created_at', 'blogs.updated_at')
            ->join('users', 'blogs.user_id', '=', 'users.user_id')
            ->get();

        return view('blogs/index')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('blogs/create');
    }

    public function store()
    {
        $data = Request()->all();

        blogModel::create([

            'user_id'     => $data['userid'],
            'title'       => $data['title'],
            'description' => $data['description'],

        ]);

        return redirect('blogs/');
    }

    public function edit(blogModel $data)
    {
        return view('blogs/edit', compact('data'));
    }

     public function show($id)
    {
        $blogs = DB::table('blogs')
            ->select('blog_id', 'name', 'title', 'description', 'blogs.created_at', 'blogs.updated_at')
            ->join('users', 'blogs.user_id', '=', 'users.user_id')
            ->where('blogs.blog_id','=',$id)
            ->first();
        return view('blogs/show')->with('blogs', $blogs);
    }

    public function upgrade()
    {
        $data = Request()->all();

        blogModel::where('blog_id', $data['blogid'])
            ->update([

                'user_id'     => $data['userid'],
                'title'       => $data['title'],
                'description' => $data['description'],

            ]);
        return redirect('blogs/');
    }

    public function destroy($blogid)
    {
        blogModel::where('blog_id', $blogid)->delete();

        return redirect('blogs/');

    }
}
