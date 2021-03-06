<?php

namespace App\Repositories;

use App\Models\services;
use App\Repositories\BaseRepository;

/**
 * Class servicesRepository
 * @package App\Repositories
 * @version October 5, 2021, 12:39 pm UTC
*/

class servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Address',
        'Age',
        'Date'
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
        return services::class;
    }
}
