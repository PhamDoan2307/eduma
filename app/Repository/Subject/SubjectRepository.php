<?php
/**
 * Created by PhpStorm.
 * User: yaphe
 * Date: 3/18/2017
 * Time: 7:01 PM
 */
namespace App\Repository\Subject;

use App\Category;
use App\Curriculum;
use App\Description;
use App\Instructor;
use App\Repository\Subject\SubjectInterface;
use App\Review;
use App\Subject;
use App\SubjectInstructor;

class SubjectRepository implements SubjectInterface
{
    protected $subject;
    protected $cate;
    protected $instructor;
    protected $des;
    protected $curr;
    protected $subjectInstructor;
    protected $review;

    public function __construct(
        Subject $subject,
        Category $category,
        Instructor $instructor,
        Description $description,
        Curriculum $curriculum,
        SubjectInstructor $subjectInstructor,
        Review $review)
    {
        $this->subject = $subject;
        $this->cate = $category;
        $this->instructor = $instructor;
        $this->des = $description;
        $this->curr = $curriculum;
        $this->subjectInstructor = $subjectInstructor;
        $this->review=$review;
    }

    public function getList()
    {
        return $this->subject->all();
    }

    public function getCate()
    {
        return $this->cate->all();
    }

    public function find($id)
    {
        return $this->subject->findOrfail($id);
    }

    public function create(array $attributes)
    {
        return $this->subject->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->subject->findOrFail($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->subject->findOrFail($id)->delete();
    }

    public function getInstructor()
    {
        return $this->instructor->all();
    }

    public function createDescription(array $attr)
    {
        return $this->des->create($attr);
    }

    public function createCurriculum(array $attr)
    {
        return $this->curr->create($attr);
    }

    public function createSubjectInstructor(array $attr)
    {
        return $this->subjectInstructor->create($attr);
    }

    public function createReview(array $attr)
    {
        return $this->review->create($attr);
    }
//    front-edn
    public function paginate($item,$status,$num)
    {
        return $this->subject->orderBy($item,$status)->paginate($num);
    }
    public function findSlug($slug)
    {
        return $this->subject->whereSlug($slug)->first();
    }

    public function findDescription($id)
    {
        return $this->subject->find($id)->description;
    }

    public function findCurriculum($id)
    {
        return $this->subject->find($id)->curriculum;
    }

    public function findInstructor($id)
    {
        return $this->subject->find($id)->instructor;
    }

    public function findReview($id)
    {
        return $this->subject->find($id)->review;
    }

    public function updateDescription(array $attr, $id)
    {
        return $this->des->where('subject_id',$id)->update($attr);
    }

    public function updateCurriculum(array $attr, $id)
    {
        return $this->curr->find($id)->update($attr);
    }

    public function delSubjectInstructor($id)
    {
        return $this->subjectInstructor->where('subject_id',$id)->delete();
    }

    public function updateReview(array $attr, $id)
    {
        return $this->review->where('subject_id',$id)->update($attr);
    }
}