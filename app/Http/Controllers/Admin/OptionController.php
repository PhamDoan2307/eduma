<?php

namespace App\Http\Controllers\Admin;

use App\AppOption;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class OptionController extends Controller
{
    public function index()
    {
        $options = AppOption::all();
        return view('admin.option', compact('options'));
    }

    public function postAdd(Request $request)
    {

//        dd($request->all());
        $title_index = AppOption::firstOrCreate([
            'name' => 'title_index'
        ]);
        $title_index->value = $request->title_index;
        $title_index->save();

        $description = AppOption::firstOrCreate([
            'name' => 'description'
        ]);

        $description->value = $request->description;
        $description->save();

        Cache::forever('phone_number', $request->phone_number);
        Cache::forever('email', $request->email);
//        dd($title_index->value);

        return back();
    }
}
