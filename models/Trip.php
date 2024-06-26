<?php namespace NielsVanDenDries\TripRegistration\Models;

use Model;

/**
 * Model
 */
class Trip extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'nielsvandendries_tripregistration_trip';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
