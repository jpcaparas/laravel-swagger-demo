<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as BaseController;

/**
 * @SWG\Swagger(
 *     host="swagger.test.jpcaparas.com",
 *     basePath="/api",
 *     schemes={"https"},
 *     produces={"application/json"},
 *     consumes={"application/json"},
 *          @SWG\Info(
 *              title="Laravel Swagger Demo",
 *              version="1.0",
 *              description="Swagger creates human-readable documentation for your APIs",
 *              @SWG\Contact(name="jp@jpcaparas.com"),
 *              @SWG\License(name="Unlicense")
 *          ),
 *          @SWG\Definition(
 *              definition="Timestamps",
 *              @SWG\Property(
 *                  property="created_at",
 *                  type="string",
 *                  format="date-time",
 *                  description="Creation date",
 *                  example="2017-03-01 00:00:00"
 *              ),
 *              @SWG\Property(
 *                  property="updated_at",
 *                  type="string",
 *                  format="date-time",
 *                  description="Last updated",
 *                  example="2017-03-01 00:00:00"
 *              )
 *          )
 * )
 */
class Controller extends BaseController
{
    //
}