<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class postController extends Controller
{
    public function AddNewPost()
    {
    	return view('post.writepost');
    }

    public function AddNewCategory()
    {
    	return view('post.addcategory');
    }

    public function StoreCategory(Request $request)
    {
    	$data = array();
    	$data['name'] = $request->name;
    	$data['slug'] = $request->slug;
    	$category = DB::table('categories')->insert($data);
    }

    public function AllCategory()
    {
    	$category = DB::table('categories')->get();
    	return view('post.allcategories', compact('category'));
    }

    public function ViewCategory($id)
    {
    	$category = DB::table('categories')->where('id', $id)->first();
    	return view('post.viewcategory')->with('category', $category);
    }

}
