<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CategoriesRequest;
use App\Repository\Category\CategoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $cateRepo;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->cateRepo = $categoryInterface;
    }

    public function getList()
    {
        $categories=$this->cateRepo->getList();
        return view('admin.category.index',compact('categories'));
    }

    public function getAdd()
    {
        return view('admin.category.create');
    }
    public function postAdd(CategoriesRequest $request)
    {
        $ip=$request->all();
        $ip['slug']=changeTitle($request->name);
        $this->cateRepo->create($ip);
        return back()->with(['success'=>'thêm mới thành công']);
    }
}
