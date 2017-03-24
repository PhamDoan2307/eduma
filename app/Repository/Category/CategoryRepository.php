<?php
/**
 * Created by PhpStorm.
 * User: yaphe
 * Date: 3/18/2017
 * Time: 7:01 PM
 */
namespace App\Repository\Category;


use App\Category;

class CategoryRepository implements CategoryInterface{

    protected $Cate;

    public function __construct(Category $category)
    {
        $this->Cate=$category;
    }

    public function getList()
    {
        return $this->Cate->all();
    }

    public function find($id)
    {
        return $this->Cate->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->Cate->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->Cate->findOrfail($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->Cate->findOrFail($id)->delete();
    }
}