<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\DeleteRequest;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * @SWG\Delete(
 *     path="/employees/{id}",
 *     tags={"Employees"},
 *     summary="Delete employee",
 *     @SWG\Parameter(
 *          name="id",
 *          in="path",
 *          required=true,
 *          type="integer",
 *          description="UUID",
 * 		),
 *     @SWG\Response(
 *          response=204,
 *          description="Delete an employee",
 *          @SWG\Schema(ref="#/definitions/Employee")
 *      ),
 *     @SWG\Response(
 *          response="default",
 *          description="error",
 *          @SWG\Schema(ref="#/definitions/Error")
 *   )
 * ),
 */
class DeleteController extends Controller
{
    /**
     * Function that automatically triggers when controller is referenced.
     * @param int $employee Employee ID
     * @return JsonResponse
     */
    public function __invoke($employee)
    {
        $employee = Employee::findOrFail($employee);

        $employee->delete();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}