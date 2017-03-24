<?php
/**
 * Created by PhpStorm.
 * User: yaphe
 * Date: 3/18/2017
 * Time: 7:01 PM
 */
namespace App\Repository\Subject;

use App\Repository\RepositoryInterface;

interface SubjectInterface extends RepositoryInterface
{

    public function getCate();

    public function getInstructor();

//    public function paginate($item,$status,$num);

    public function paginate($item, $status, $num);

    public function findSlug($slug);

    public function findDescription($id);

    public function findCurriculum($id);

    public function findInstructor($id);

    public function findReview($id);

    public function createDescription(array $attr);

    public function createCurriculum(array $attr);

    public function createSubjectInstructor(array $attr);

    public function createReview(array $attr);

    public function updateDescription(array $attr,$id);

    public function updateCurriculum(array $attr,$id);

    public function delSubjectInstructor($id);
    public function updateReview(array $attr,$id);

}
