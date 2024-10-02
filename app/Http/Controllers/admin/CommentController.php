<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    /**
     * Display a listing of the comments.
     */
    public function index()
    {
        $comments = Comment::all(); // Penulisan model yang benar
        return view('pages.admin.comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new comment.
     */
    public function create()
    {
        return view('pages.admin.comment.create');
    }

    /**
     * Store a newly created comment in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'review' => 'required|string|max:255',
        ]);

        Comment::create($validatedData); // Penulisan model yang benar

        return redirect()->route('pages.admin.comment.index')->with('success', 'Comment created successfully!');
    }

    /**
     * Remove the specified comment from storage.
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        // Delete the image from storage if it exists
        if ($comment->image) {
            Storage::delete($comment->image);
        }

        $comment->delete();

        return redirect()->route('pages.admin.comment.index')->with('success', 'Comment deleted successfully!');
    }

    /**
     * Display the specified comment.
     */
    public function view($id)
    {
        $comment = Comment::findOrFail($id); // Penulisan model yang benar
        return view('pages.admin.comment.view', compact('comment'));
    }
}
