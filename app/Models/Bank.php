<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Bank
 * @package App\Models
 * @version October 20, 2022, 4:29 am UTC
 *
 * @property integer $identifier
 * @property integer $phone
 * @property integer $code
 * @property integer $phone_to
 */
class Bank extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'banks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'identifier',
        'phone',
        'code',
        'phone_to'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'integer',
        'phone' => 'integer',
        'code' => 'integer',
        'phone_to' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'identifier' => 'required',
        'phone' => 'required',
        'code' => 'required',
        'phone_to' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
