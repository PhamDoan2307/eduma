<?php
/**
 * Created by PhpStorm.
 * User: yaphe
 * Date: 3/18/2017
 * Time: 7:01 PM
 */
namespace App\Repository\Instructor;

//use App\Category;
use App\Repository\Instructor\InstructorInterface;
use App\Instructor;

class InstructorRepository implements InstructorInterface
{
    protected $instructor;

    public function __construct(Instructor $instructor)
    {
        $this->instructor=$instructor;
    }

    public function getList()
    {
        return $this->instructor->all();
    }
    public function paginate($num)
    {
        return $this->instructor->paginate($num);
    }

    public function find($id)
    {
        return $this->instructor->findOrfail($id);
    }

    public function create(array $attributes)
    {
        return $this->instructor->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->instructor->findOrFail($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->instructor->findOrFail($id)->delete();
    }
}