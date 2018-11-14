<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\blogModel;

class Blog extends Controller
{
    public function index()
    {
    	$blogs = DB::table('blogs')
            ->select('blog_id', 'names', 'title', 'description', 'blogs.created_at', 'blogs.updated_at')
            ->join('users','blogs.user_id','=','users.user_id')
            ->get();

    	return view('blogs/index')->with('blogs',  $blogs);
    }

    public function create()
    {
    	return view('blogs/create');
    }

    public function store()
    {
    	$data = Request()->all();

    	blogModel::create([

    			'user_id' => $data['userid'],
    			'title' => $data['title'],
    			'description' => $data['description']

    	]);

    	return redirect('blogs/');
    }

    public function edit(blogModel $data)
    {
    	return view('blogs/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

       	blogModel::where('blog_id', $data['blogid'])
    				->update([

    					'user_id' => $data['userid'],
    					'title' => $data['title'],
    					'description' => $data['description']
					
					]);   
		return redirect('blogs/'); 
    }

    public function destroy($blogid)
    {
    	blogModel::where('blog_id', $blogid)->delete();

    	return redirect('blogs/');

    }
}
