<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 3/1/2017
 * Time: 11:12 AM
 */

namespace App\Http\ViewComposers;


use App\Category;
use App\Post;
use App\Subject;
use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view)
    {
        $categories = Category::all();
        $latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $latest_subjects = Subject::orderBy('created_at', 'desc')->take(3)->get();
        $view->with('categories', $categories);
        $view->with('latest_posts', $latest_posts);
        $view->with('latest_subjects', $latest_subjects);
    }
}