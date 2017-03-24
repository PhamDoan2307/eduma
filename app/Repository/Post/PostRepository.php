<?php
use App\Repository\Post\PostInterface;

/**
 * Created by PhpStorm.
 * User: yaphe
 * Date: 3/18/2017
 * Time: 7:01 PM
 */
namespace App\Repository\Post;

use App\Category;
use App\Post;

class PostRepository implements PostInterface
{

    protected $Post;

    protected $Cate;

    public function __construct(Post $post,Category $category)
    {
        $this->Post = $post;
        $this->Cate =$category;
    }

    public function getList()
    {
        return $this->Post->all();
    }

    public function getCate()
    {
        return $this->Cate->all();
    }

    public function find($id)
    {
        return $this->Post->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->Post->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->Post->findOrFail($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->Post->findOrFail($id)->delete($id);
    }

    public function paginate($value1, $value2, $value3)
    {
        return $this->Post->orderBy($value1,$value2)->paginate($value3);
    }
}