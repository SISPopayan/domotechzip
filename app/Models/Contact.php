<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Contact",
 *      required={fullName, email, phone, message},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fullName",
 *          description="fullName",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="message",
 *          description="message",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = "contacts";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        "fullName",
        "email",
        "phone",
        "message"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "fullName" => "string",
        "email" => "string",
        "phone" => "string",
        "message" => "string"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        "fullName" => "required",
        "email" => "required|email",
        "phone" => "required",
        "message" => "required"
    ];
}
