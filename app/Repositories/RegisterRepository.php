<?php

namespace App\Repositories;

use App\Models\Register;
use App\Repositories\BaseRepository;

/**
 * Class RegisterRepository
 * @package App\Repositories
 * @version October 21, 2022, 12:17 pm UTC
*/

class RegisterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bank',
        'name',
        'phone',
        'identifier'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Register::class;
    }
}
