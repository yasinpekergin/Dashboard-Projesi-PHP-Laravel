<?php

namespace App\Models;

use App\Models\City;
use App\Models\Adress;
use App\Models\District;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'city_id',
        'city_code',
        'country_id',
        'country_code',
        'latitude',
        'longitude',
        'flag',
        'wikiDataId',
    ];

    /**
     * The roles that belong to the city
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */


}
