<?php

namespace App\Http\Controllers;

use App\AppOption;
use App\Category;
use App\Post;
use App\Subject;

class IndexController extends Controller
{
    public function index(){
        $subjects=Subject::orderBy('created_at','desc')->take(6)->get();
        $posts=Post::orderBy('created_at','desc')->take(6)->get();
        $options = AppOption::all();
        $title = $options->where('name', 'title_index')->first(function ($value, $key) {
            if (empty($value)) return 'Lập trình viên';
            return $value;
        });
        $description = $options->where('name', 'title_index')->first(function ($value, $key) {
            if (empty($value)) return 'Website lập trình viên';
            return $value;
        });
        return view('index', compact('subjects', 'posts', 'options', 'title', 'description'));
    }

    public function contact(){
        return view('contact');
    }

    public function category($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        $subjects = $category->subjects()->paginate(12);
        return view('subject.subject_list', compact('subjects'));
    }
}
