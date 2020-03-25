<?php


namespace App\Http\Controllers;


class PostController extends Controller
{
    public function index($post)
    {
        /*$posts = [
            'first_post' => 'ololo',
            'second_post' => 'qwerty'
        ];
        if (!array_key_exists($post, $posts)) {
            abort(404, 'Empty');
        }
        return $posts[$post];*/
        $post = Post::find($post);
        return view('welcome', compact('post'));
    }
}
