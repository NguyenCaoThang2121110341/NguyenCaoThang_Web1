<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $list = Post::where('status', '!=', 0)
            ->select('post.id', 'post.topic_id', 'post.title', 'post.slug','post.detail','post.image','post.type', 'post.description')
            ->orderBy('post.created_at', 'desc')
            ->get();

        // Lấy danh sách topic
        $topics = Topic::select('topic.id', 'topic.name')->get();
        return view("backend.post.index", compact("list", "topics"));   
    } 

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        
        $post->topic_id = $request->topic_id;
        $post->slug = Str::of($request->title)->slug('-');
        $post->description = $request->description;
        $post->detail = $request->detail;
        $post->type = $request->type;
        $post->created_at = date('Y-m-d H:i:s');
        $post->created_by = Auth::id() ?? 1; // Default to 1 if Auth::id() is null
        $post->status = $request->status;
        $post->updated_at = now(); // Sử dụng hàm now() để lấy thời gian hiện tại

        $post->save();

        return redirect()->route('admin.post.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
