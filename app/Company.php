<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Uuids;

    /**
     */
    protected $table = 'mn_companies';

    /**
     */
    protected $primaryKey = 'uuid';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address', 'home_phone', 'desk_phone', 'mobile_phone', 'fax', 'tax_code', 'website', 'logo', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
