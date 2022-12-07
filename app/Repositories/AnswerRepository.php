<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Models\Question;

class AnswerRepository extends AbstractRepository
{
    /** @var Answer */
    protected $model;

    public function __construct(Answer $answer)
    {
        $this->model = $answer;
    }
}
