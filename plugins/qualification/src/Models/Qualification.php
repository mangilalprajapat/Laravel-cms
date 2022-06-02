<?php

namespace Plugins\Qualification\Models;

use Illuminate\Database\Eloquent\Model;
use App\Support\Traits\UuidTrait;

class Qualification extends Model
{
    use UuidTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'type', 'icon', 'name', 'institute', 'description', 'start_at', 'end_at'
    ];


}
