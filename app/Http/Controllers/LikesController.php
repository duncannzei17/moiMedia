<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function actOnLike(Request $request, $id)
    {
        $action = $request->get('action');
        switch ($action) {
            case 'Like':
                Article::where('id', $id)->increment('likes_count');
                break;
            case 'Unlike':
                Article::where('id', $id)->decrement('likes_count');
                break;
        }
        event(new ArticleAction($id, $action)); // fire the event
        return 'success';
    }
}
