<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use Uuids;

    /**
     */
    protected $table = 'mn_group';

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
        'name', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
