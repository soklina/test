<?php

namespace App\Http\Controllers\Admin;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Intervention\Image\ImageManagerStatic as Image;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('admin.author.index',compact('authors'));
    }
    public function create(){
        return view('admin.author.register_author');
    }
    public function store(Request $request){
        $this->validate($request,[
           'username'=>'required',
            'email'=>'required|email|unique:authors',
            'phonenumber'=>'required',
            'bio'=>'required',
            'profile_pic'=>'required'
        ]);
        $author = new Author();
        $author->username =$request->username;
        $author->picture = $request->profile_pic;
        $author->email = $request->email;
        $author->phone = $request->phonenumber;
        $author->career = $request->career;
        $author->address = $request->address;
        $author->bio = $request->bio;
        if($author->save()){
            return back()->with('success_message','Done');
        }
    }
    public function manageAuthor(){
        return 'manageAuthor';
    }
    public function edit($id){
        $author = Author::findOrFail($id);
        return view('admin.author.update_author',compact('author'));
    }
    public function update(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'email'=>'required|email',
            'phonenumber'=>'required',
            'bio'=>'required',
        ]);
        $author = Author::findOrFail($request->id);
        $author->username =$request->username;
        if($request->profile_pic){
            $author->picture = $request->profile_pic;
        }
        else{
            $author->picture = $request->oldPhoto;
        }

        $author->email = $request->email;
        $author->phone = $request->phonenumber;
        $author->career = $request->career;
        $author->address = $request->address;
        $author->bio = $request->bio;
        if($author->save()){
            return back()->with('success_message','Done');
        }
    }
    public function destroy(){
        return 'destroy';
    }
}
