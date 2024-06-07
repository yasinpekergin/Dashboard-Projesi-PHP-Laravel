<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use App\Models\Country;
use App\Models\District;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adress extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adress_details',
        'postcode',
        'is_active',
        'user_id',
        'country_id',
        'city_id',
        'district_id'
    ];

        /**
         * Get the District associated with the Adress
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function District()
        {
            return $this->hasOne(District::class, 'id', 'district_id');
        }
        public function User()
        {
            return $this->hasOne(User::class, 'id', 'user_id');
        }
        public function City()
        {
            return $this->hasOne(City::class, 'id', 'city_id');
        }
        public function Country()
        {
            return $this->hasOne(Country::class, 'id', 'country_id');
        }
}
