<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 *     definition="NewEmployee",
 *     required={"first_name", "last_name", "employer", "started_at"},
 *     @SWG\Property(
 *          property="first_name",
 *          type="string",
 *          description="Employee's first name",
 *          example="John"
 *    ),
 *     @SWG\Property(
 *          property="last_name",
 *          type="string",
 *          description="Employee's last name",
 *          example="Smith"
 *    ),
 *     @SWG\Property(
 *          property="employer",
 *          type="string",
 *          description="Employer",
 *          example="X Company"
 *    ),
 *     @SWG\Property(
 *          property="started_at",
 *          type="string",
 *          format="date-time",
 *          description="Date when employee started working for the employer",
 *          example="2011-03-01 00:00:00"
 *    ),
 *     @SWG\Property(
 *          property="stopped_at",
 *          type="string",
 *          format="date-time",
 *          description="Date when employee stopped/will stop working for the employer",
 *          example="2017-03-01 00:00:00"
 *    )
 * )
 * @SWG\Definition(
 *     definition="Employee",
 *     allOf = {
 *          { "$ref": "#/definitions/NewEmployee" },
 *          { "$ref": "#/definitions/Timestamps" },
 *          { "required": {"id"} }
 *     }
 * )
 */
class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'started_at',
        'stopped_at',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'started_at',
        'stopped_at',
        'created_at',
        'updated_at'
    ];
}