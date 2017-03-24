<?php
namespace App\Repository;
/**
 * Created by PhpStorm.
 * User: yaphe
 * Date: 3/18/2017
 * Time: 6:40 PM
 */
interface RepositoryInterface
{
    public function getList();

    public function find($id);

    public function create(array $attributes);

    public function update(array $attributes, $id);

    public function delete($id);
}