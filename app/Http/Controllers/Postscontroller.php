<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Post;
class Postscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $post = new Post;
        $post->judul = $request->input('judul');
        $post->tahun_terbit= $request->input('tahun_terbit');
        $post->pengarang = $request->input('pengarang');
        $post->penerbit = $request->input('penerbit');
        $post->save();
       
        return redirect('/posts');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function viewShow(){
            $posts = \App\Post::all();

            return view('posts.show',compact('posts','id'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = DB::table('posts')->where('id',$id)->get();
        return view('posts.edit',compact('posts',$posts));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('posts')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'pengarang' => $request->pengarang
        ]);
        return redirect('/shows');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $posts = Post::find($id);
        
        $posts->delete();
        return back()->with('succes', 'deleted data'); 
    }
}
