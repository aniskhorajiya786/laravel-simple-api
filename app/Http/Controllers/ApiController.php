<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableBlog;

class ApiController extends Controller
{
    //
    public function index(){
        $blog = TableBlog::all();
        return response()->json($blog,200);        
    }

    public function post(Request $request){
        $blog = new TableBlog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;
        $blog->summary = $request->summary;
        $blog->meta_data = $request->meta_data;
        $blog->meta_description = $request->meta_description;
        $blog->author = $request->author;

        if($blog->save()){
            return response()->json($blog,200);
        }else{
            return response()->json("blog post faild",400);
        }
    }

    public function editpost(Request $request, $id){
        $editblog = TableBlog::find($id);
        if($editblog){
            $editblog->title = $request->title;
            $editblog->description = $request->description;
            $editblog->content = $request->content;
            $editblog->summary = $request->summary;
            $editblog->meta_data = $request->meta_data;
            $editblog->meta_description = $request->meta_description;
            $editblog->author = $request->author;
            $editblog->save();

           return response()->json($editblog,200); 
        }else{
            return response()->json('blog post not founded',400);
        }
    }

    public function deletepost($id){
        // $deleteblog = TableBlog::findOrFail($id);
        $deleteblog = TableBlog::find($id);
        $deleteblog->delete();
        return response()->json('post deleted success',200);
    }
}
