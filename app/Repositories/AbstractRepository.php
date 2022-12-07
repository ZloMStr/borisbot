<?php

namespace App\Repositories;

abstract class AbstractRepository implements RepositoryInterface
{
    /** @var \Illuminate\Database\Eloquent\Model */
    protected $model;

    public function find($id)
    {
        return $this->model::find($id);
    }
}
