<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Api\Controller;
use App\Models\Employee;

/**
 * @SWG\Get(
 *     path="/employees/{id}",
 *     tags={"Employees"},
 *     summary="Fetch employee",
 *     @SWG\Parameter(
 *          name="id",
 *          in="path",
 *          required=true,
 *          type="integer",
 *          description="UUID",
 * 		),
 *     @SWG\Response(
 *          response=200,
 *          description="An employee",
 *          @SWG\Schema(ref="#/definitions/Employee")
 *      ),
 *     @SWG\Response(
 *          response="default",
 *          description="error",
 *          @SWG\Schema(ref="#/definitions/Error")
 *   )
 * ),
 */
class FetchController extends Controller
{
    public function __invoke(Employee $employee)
    {
        return $employee->toJson();
    }
}