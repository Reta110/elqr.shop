<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Register
 * @package App\Models
 * @version October 21, 2022, 12:17 pm UTC
 *
 * @property string $bank
 * @property string $name
 * @property string $phone
 * @property string $identifier
 */
class Register extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'registers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bank_id',
        'name',
        'phone',
        'identifier'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'identifier' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bank_id' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'identifier' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function bank()
    {
        return $this->hasOne(Bank::class, 'id', 'bank_id');
    }
}
