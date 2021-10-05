<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class pricing
 * @package App\Models
 * @version October 5, 2021, 12:43 pm UTC
 *
 * @property string $Small
 * @property string $Medium
 * @property string $Large
 */
class pricing extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Small',
        'Medium',
        'Large'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Small' => 'string',
        'Medium' => 'string',
        'Large' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Small' => 'nullable|string|max:10',
        'Medium' => 'nullable|string|max:10',
        'Large' => 'nullable|string|max:10',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
