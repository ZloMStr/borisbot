<?php

namespace App\Services;

use App\Http\Requests\AnswerRequest;
use App\Jobs\ProcessSendNextQuestion;
use App\Repositories\AnswerRepository;
use App\Repositories\QuestionRepository;

class SurveyService
{
    /** @var AnswerRepository */
    private $answersRepository;
    private $questionRepository;

    public function __construct(AnswerRepository $answerRepository, QuestionRepository $questionRepository)
    {
        $this->answersRepository = $answerRepository;
        $this->questionRepository = $questionRepository;
    }

    public function sendNextQuestion(AnswerRequest $answerRequest)
    {
        $answer = $this->answersRepository->find($answerRequest->id);
        $nextQuestion = $answer->nextQuestion ?? $answer->question->nextQuestion;

        if (!is_null($nextQuestion)) {
            ProcessSendNextQuestion::dispatch($nextQuestion);
        }

        // TODO: maybe send notify for survey complete?
    }
}
