<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            //when its going to go or use to return into a page this is whre all the function go
        $posts = Todo::all();
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          // for view that use to create a data into the table
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //use to input data into database
        $validated = $request->validate([
          'Title' => 'required',
          'context' => 'required',
        ]);
        Todo::create($validated);
        return redirect()->route('posts.index')->with('success',
        'Todo list created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
           //use to edit the post
        $post = Todo::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       //use to update data into database
        $validated = $request->validate([
          'Title' => 'required',
          'context' => 'required',
        ]);
        $post = Todo::findOrFail($id); //use to find the post
        $post->update($validated); // use to update the post with new data

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         //use to delete a post
        $post = Todo::findOrFail($id); //use to find the post
        $post->delete(); // use to delete the post  
        
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
