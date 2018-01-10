<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {

    	//insert mass assignment
    	// Blog::create([
    	// 	'title' => 'test2',
    	// 	'description' => 'test2',
    	// 	'created_at' => '2016-08-08 00:12:45',
    	// 	'updated_at' => '2016-08-08 00:12:45',
    	// ]);

    	//update assignment
    	// Blog::find(8)->update([
    	// 	'title'			=> 'Road Drash',
    	// 	'description'	=> 'Road Rash: Jailbreak is a racing video game developed by EA Redwood Shores' 
    	// ]);

    	//delete versi 2
    	// Blog::destroy([3,4]);

    	//soft delete
    	// $blog = Blog::find(3);
    	// $blog->delete();
    	//$blogs = Blog::withTrashed()->restore(); // kembalikan data softdeletes

    	$blogs = Blog::all();
    	return view('blog/home',['blogs' => $blogs]);
    }

    public function show($id)
    {

    	// $blog = Blog::findOrFail($id);
    	$blog = Blog::find($id);
    	if(!$blog)
    		abort(404);

    	return view('blog/single',['blog'=> $blog]);
    }

    public function create()
    {
    	return view('blog/create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title'			=> 'required|min:5',
    		'description'	=> 'required|min:5|max:10'
    	]);

    	$blog = new Blog;
    	$blog->title = $request->title;
    	$blog->description = $request->description;
    	$blog->save();

    	return redirect('blog');
    	
    }

    public function edit($id)
    {

    	$blog = Blog::find($id);
    	if(!$blog)
    		abort(404);

    	return view('blog/edit',['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
    	$blog = Blog::find($id);
    	$blog->title 		= $request->title;
    	$blog->description 	= $request->description;
    	$blog->save();

    	return redirect('blog/' . $id);

    }

    public function destroy($id)
    {
    	$blog = Blog::find($id);
    	$blog->delete();

    	return redirect('blog');
    }


}
