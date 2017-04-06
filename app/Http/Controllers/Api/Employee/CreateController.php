<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\Employee\CreateRequest;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * @SWG\Post(
 *     path="/employees",
 *     tags={"Employees"},
 *     summary="Create new employee",
 *     @SWG\Parameter(
 * 			name="id",
 * 			in="body",
 *          schema={"$ref": "#/definitions/NewEmployee"},
 * 			required=true,
 * 			type="integer",
 * 			description="UUID",
 * 		),
 *     @SWG\Response(
 *          response=201,
 *          description="A newly-created employee",
 *          @SWG\Schema(ref="#/definitions/Employee")
 *      ),
 *     @SWG\Response(
 *          response="default",
 *          description="error",
 *          @SWG\Schema(ref="#/definitions/Error")
 *   )
 * ),
 */
class CreateController extends Controller
{
    public function __invoke(CreateRequest $createRequest)
    {
        $employee = new Employee();
        $employee
            ->fill($createRequest->json()->all())
            ->save();

        return new JsonResponse($employee, Response::HTTP_CREATED);
    }
}