<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Services\SurveyService;

class WebhookController extends Controller
{
    private $surveyService;

    public function __construct(SurveyService $surveyService)
    {
        $this->surveyService = $surveyService;
    }

    public function input(AnswerRequest $request)
    {
        $this->surveyService->sendNextQuestion($request);
    }
}
