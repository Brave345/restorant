<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('comment.index',compact('comments'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'name' => 'required',
            'blog_id' => 'required',
        ]);

        $comment = new Comment();
        $comment->blog_id = $request->input('blog_id');
        $comment->content = $request->input('comment');
        $comment->name = $request->input('name');
        $comment->save();

        return redirect()->back()->with('success', 'Comment posted successfully.');
    }

    public function comen(){
        return view('comen');
        
    }
    public function destroy($id)
    {
        $comments = Comment::findOrFail($id);
        $comments->delete();

        return redirect()->route('comment.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}
