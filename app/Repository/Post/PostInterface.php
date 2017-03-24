<?php
/**
 * Created by PhpStorm.
 * User: yaphe
 * Date: 3/18/2017
 * Time: 7:01 PM
 */
namespace App\Repository\Post;

use App\Repository\RepositoryInterface;

interface PostInterface extends RepositoryInterface{

    public function getCate();
    public function paginate($value1,$value2,$value3);
}