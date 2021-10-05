<?php

namespace App\Repositories;

use App\Models\sales;
use App\Repositories\BaseRepository;

/**
 * Class salesRepository
 * @package App\Repositories
 * @version October 5, 2021, 12:43 pm UTC
*/

class salesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'BrandName',
        'Stocks',
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
        return sales::class;
    }
}
