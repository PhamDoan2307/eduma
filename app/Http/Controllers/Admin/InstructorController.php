<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\InstructorRequest;
use App\Repository\Instructor\InstructorInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorController extends Controller
{
    protected $instructorRepo;

    public function __construct(InstructorInterface $instructorInterface)
    {
        $this->instructorRepo = $instructorInterface;
    }

    public function getList()
    {
        $instructors = $this->instructorRepo->paginate(10);
        return view('admin.instructor.index', compact('instructors'));
    }

    public function getAdd()
    {
        return view('admin.instructor.create');
    }

    public function postAdd(InstructorRequest $request)
    {
        $input = $request->all();
        $fileName = $request->file('avatar')->getClientOriginalName();
        $input['avatar']=$fileName;
        $request->file('avatar')->move('../resources/upload/', $fileName);
        $input['slug'] = changeTitle($request->name);
        $this->instructorRepo->create($input);
        return redirect()->route('admin.instructor.getList')->with(['success' => 'Thêm mới thành công giảng viên ' . $request->name]);
    }
}
