<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs =Blog::all();
        // echo"<pre>";
        //      print_r($blogs);
        //      echo "<pre>";
        return view('home',['blogs'=>$blogs]);
    }
    public function add(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);
        $blogs = new Blog;
        $blogs->title=$request->input('title');
        $blogs->description=$request->input('description');
        $blogs->save();
        return redirect('/home')->with('info','article saved sucessfully');


    }
    public function update($id)
    {//return "hii";

        $blogs = Blog::find($id);
        //return $id;
        return view('update',['blogs'=>$blogs])
;}

public function edit(Request $request,$id){
    $this->validate($request,[
        'title'=>'required',
        'description'=>'required'
    ]);
    $data= array(
        'title'=>$request->input('title'),
        'description'=>$request->input('description')
    );
    Blog::where('id',$id)
    ->update($data);

    return redirect('/home')->with('info','article updated sucessfully');
}
public function read($id){
    $blogs = Blog::find($id);
    return view('read',['blogs'=>$blogs]);
}
public function delete($id)
{
    Blog::where('id',$id)->delete();
    return redirect('/home')->with('info','article delete successfully');
}
}
