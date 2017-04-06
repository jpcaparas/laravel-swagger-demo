<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;

/**
 * @SWG\Get(
 *     path="/employees",
 *     tags={"Employees"},
 *     summary="List employees",
 *     @SWG\Response(
 *          response=200,
 *          description="List of employees",
 *          @SWG\Schema(ref="#/definitions/Employee")
 *      ),
 *     @SWG\Response(
 *          response="default",
 *          description="error",
 *          @SWG\Schema(ref="#/definitions/Error")
 *   )
 * ),
 */
class ListController extends Controller
{
    public function __invoke()
    {
        $employees = Employee::paginate();

        return $employees->toJson();
    }
}
