<?php

namespace App\Repositories;

use App\Models\Question;

class QuestionRepository extends AbstractRepository
{
    /** @var Question */
    protected $model;

    public function __construct(Question $answer)
    {
        $this->model = $answer;
    }
}
