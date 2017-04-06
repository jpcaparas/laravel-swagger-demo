<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

abstract class ApiRequest extends FormRequest
{
    /**
     * @param array $errors
     * @return JsonResponse
     */
    public function response(array $errors) {

        return new JsonResponse($errors, 400);
    }
}