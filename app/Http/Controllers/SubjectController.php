<?php

namespace App\Http\Controllers;

use App\Enrollment;
use App\Repository\Subject\SubjectInterface;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{

    protected $subject;

    public function __construct(SubjectInterface $subjectInterface)
    {
        $this->subject = $subjectInterface;
    }

    public function show($slug = null)
    {
        if (empty($slug)) {
            $subjects = $this->subject->paginate('updated_at', 'desc', 10);
            return view('subject.subject_list', compact('subjects'));
        } else {
            $subject = $this->subject->findSlug($slug);
            $subject_id = $subject->id;
            //            lấy nội dung
            $description = $this->subject->findDescription($subject_id);
//            lấy bài giảng
            $curr = $this->subject->findCurriculum($subject_id);
            $total = $curr->count();
//            lấy giáo viên
            $instruct = $this->subject->findInstructor($subject_id);
//đánh giá
            $review = $this->subject->findReview($subject_id);
            $related_subjects = $subject->category->subjects()->inRandomOrder()->take(3)->get();
            return view('subject.subject_show', compact('subject', 'related_subjects', 'total', 'description', 'curr', 'instruct', 'slug', 'review'));
        }
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'number' => 'required',
            'subject' => 'required'
        ]);
        $subject = Subject::findOrFail($request->subject);
        Enrollment::create([
            'name' => $request->name,
            'phone_number' => $request->number,
            'email' => $request->email,
            'subject_id' => $subject->id
        ]);
        $request->session()->flash('success', 'Bạn đã đăng ký môn học ' . $subject->name . ' thành công.');
        return back();
    }
}
