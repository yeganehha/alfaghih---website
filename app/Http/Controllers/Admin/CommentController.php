<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('list' , [
            'createLink' =>  null,
            'title' => 'Comment',
            'table' => 'comment',
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Comment $comment)
    {
        return view('pages.comment' , compact('comment'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update(['is_approved' => $request->get('is_approved' , false) ] );
        return redirect()->route('admin:comments.index')->with('success' , 'Comment status Change successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin:comments.index')->with('success' , 'Comment deleted successfully.');
    }
}
