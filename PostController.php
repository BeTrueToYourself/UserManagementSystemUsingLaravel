<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
public function allposts()
{
    $posts=DB::table('posts')->get();
    return view('posts',compact('posts'));
}
public function viewpost($id)
{
    $post=DB::table('posts')->where('id',$id)->first();
    return view('viewpost',compact('post'));
}
public function postedit($id)
{
    $post=DB::table('posts')->where('id',$id)->first();
    return view('postedit',compact('post'));
    
}

public function postupdate(Request $request)
{
    DB::table('posts')->where('id',$request->id)->update([
        'quote'=>$request->quote
        
    
    ]);
    return redirect('posts');

    //return "Updated";
}
public function postadd(){
    return view('postinsert');
}

public function postinsert(Request $request)
{
    DB::table('posts')->insert([
     'quote'=>$request->quote
    
    ]);

    return redirect('posts');  
    //return "Inserted";

    //
}

public function postdelete($id)
{
    $post=DB::table('posts')->where('id',$id)->first();
    return view('postdelete',compact('post'));   
}

public function postremove(Request $request)
{
    DB::table('posts')->where('id',$request->id)->delete();
    return redirect('posts');
    //return "Deleted";
}

// public function deletepost($id) { 
//     DB::delete('delete from posts where id = ?',[$id]);
//      return redirect('posts'); }
// }
}
