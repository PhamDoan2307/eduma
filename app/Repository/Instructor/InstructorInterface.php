<?php
/**
 * Created by PhpStorm.
 * User: yaphe
 * Date: 3/18/2017
 * Time: 7:01 PM
 */
namespace App\Repository\Instructor;

use App\Repository\RepositoryInterface;

interface InstructorInterface extends RepositoryInterface
{

    public function paginate($num);
}
