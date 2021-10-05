<?php

namespace App\Repositories;

use App\Models\pricing;
use App\Repositories\BaseRepository;

/**
 * Class pricingRepository
 * @package App\Repositories
 * @version October 5, 2021, 12:43 pm UTC
*/

class pricingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Small',
        'Medium',
        'Large'
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
        return pricing::class;
    }
}
