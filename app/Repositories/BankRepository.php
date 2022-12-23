<?php

namespace App\Repositories;

use App\Models\Bank;
use App\Repositories\BaseRepository;

/**
 * Class BankRepository
 * @package App\Repositories
 * @version October 20, 2022, 4:29 am UTC
*/

class BankRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'identifier',
        'phone',
        'code',
        'phone_to'
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
        return Bank::class;
    }
}
