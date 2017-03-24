<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\SubjectRequest;
use App\Repository\Subject\SubjectInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Symfony\Component\HttpFoundation\File\File;
use File;
use Illuminate\Support\Facades\Response;

class SubjectController extends Controller
{
    protected $subjectRepo;
    protected $route = 'admin.subjects.getList';

    public function __construct(SubjectInterface $subjectInterface)
    {
        $this->subjectRepo = $subjectInterface;
    }

    public function getList()
    {
        $subjects = $this->subjectRepo->paginate('created_at', 'desc', 10);
        return view('admin.subject.index', compact('subjects'));
    }

    public function getAdd()
    {
        $instructors = $this->subjectRepo->getInstructor();
        $categories = $this->subjectRepo->getCate();
        return view('admin.subject.create', compact('categories', 'instructors'));
    }

    public function postAdd(Request $request)
    {
//        print_r($request->number);
        $subject = $request->only('name', 'price', 'category_id');
        $subject['slug'] = changeTitle($request->name);
        $fileName = $request->file('avatar')->getClientOriginalName();
        $subject['avatar'] = $fileName;
        $request->file('avatar')->move('../resources/upload/subject', $fileName);
        $data = $this->subjectRepo->create($subject);
        $subject_id = $data->id;
//
//        add to subjectInstructor
        foreach ($request->instructor as $item) {
            $subject_instructor['subject_id'] = $subject_id;
            $subject_instructor['instructor_id'] = $item;
            $this->subjectRepo->createSubjectInstructor($subject_instructor);
        }
//        add to des
        $description = $request->only('description', 'language', 'level');
        $description['total_duration'] = $request->total_duration;
        $description['subject_id'] = $subject_id;
        $this->subjectRepo->createDescription($description);
//        add to curriculum
        for ($i = 1; $i <= $request->number; $i++) {
            $curriculum['title'] = $request->title[$i];
            $curriculum['slug'] = changeTitle($request->title[$i]);
            $curriculum['duration'] = $request->duration[$i];
            $curriculum['order'] = $request->order[$i];
            $curriculum['subject_id'] = $subject_id;
            $this->subjectRepo->createCurriculum($curriculum);
        }
//        add review
        $review = $request->only('total', 'star');
        $review['subject_id'] = $subject_id;
        $review['width'] = 100;
        $this->subjectRepo->createReview($review);
        return redirect()->back();
    }

    public function getCurriculum()
    {
        return view('admin.subject.curriculum');
    }

    public function getCurriculumEdit()
    {
        return view('admin.subject.edit_curriculum');
    }

    public function getEdit($id)
    {
        $instructors = $this->subjectRepo->getInstructor();
        $categories = $this->subjectRepo->getCate();
        $subject = $this->subjectRepo->find($id);
        $subjectInstructors = $this->subjectRepo->findInstructor($id);
        $description = $this->subjectRepo->findDescription($id);
//            lấy bài giảng
        $curr = $this->subjectRepo->findCurriculum($id);
//            lấy giáo viên
//đánh giá
        $review = $this->subjectRepo->findReview($id);
        return view('admin.subject.edit', compact('subject', 'categories', 'instructors', 'subjectInstructors', 'description', 'curr', 'review'));
    }

    public function postEdit(Request $request, $id)
    {
        $countCurr = $this->subjectRepo->findCurriculum($id)->count();
        $img_current = '../resources/upload/subject/' . $request->img_current;
        $subject = $request->only('name', 'price', 'category_id');
        $subject['slug'] = changeTitle($request->name);
        if (!empty($request->file('avatar'))) {
            $subject['avatar'] = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('../resources/upload/subject/', $request->file('avatar')->getClientOriginalName());
            if (File::exists($img_current)) {
                File::delete($img_current);
            }
        }
        $this->subjectRepo->update($subject, $id);

        $this->subjectRepo->delSubjectInstructor($id);
        foreach ($request->instructor as $item) {
            $subject_instructor['instructor_id'] = $item;
            $subject_instructor['subject_id'] = $id;
            $this->subjectRepo->createSubjectInstructor($subject_instructor);
        }
        //        update to des
        $description = $request->only('description', 'language', 'level');
        $description['total_duration'] = $request->total_duration;
        $this->subjectRepo->updateDescription($description, $id);
//        update curr
        foreach ($request->idCurr as $idCurr) {
            $curriculum['title'] = $request->title[$idCurr];
            $curriculum['slug'] = changeTitle($request->title[$idCurr]);
            $curriculum['duration'] = $request->duration[$idCurr];
//            $curriculum['order'] = $request->order[$i];
            $this->subjectRepo->updateCurriculum($curriculum, $idCurr);
        }
//        create new curriculum if new
        if (!empty($request->number)) {
            for ($i = 1; $i <= $request->number; $i++) {
                $curriculum['title'] = $request->title1[$i];
                $curriculum['slug'] = changeTitle($request->title1[$i]);
                $curriculum['duration'] = $request->duration1[$i];
                $curriculum['order'] = $request->order1[$i];
                $curriculum['subject_id'] = $id;
                $this->subjectRepo->createCurriculum($curriculum);
            }
        }
//        add review
        $review = $request->only('total', 'star');
//        $review['subject_id'] = $id;
//        $review['width'] = 100;
        $this->subjectRepo->updateReview($review, $id);
        return redirect()->back();
    }

    public function detailSubject(Request $request)
    {
        $id=$request->id;
        $subject = $this->subjectRepo->find($id);
        $subjectInstructor = $this->subjectRepo->findInstructor($id);
        $description = $this->subjectRepo->findDescription($id);
//            lấy bài giảng
        $curr = $this->subjectRepo->findCurriculum($id);
//            lấy giáo viên
//đánh giá
        $review = $this->subjectRepo->findReview($id);
        return view('admin.subject.detail',compact('subject','subjectInstructor','description','curr','review'));
    }
    public function delete()
    {

    }
}
