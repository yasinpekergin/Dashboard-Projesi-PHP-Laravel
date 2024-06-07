<?php

namespace App\Models;

use App\Models\User;
use App\Models\Gender;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_name',
        'user_id',
        'gender_id',
        'about',
        'description',
        'mobile_phone',
        'internal_phone',
        'second_mail',
        'date_of_birth',
    ];

    /**
     * Get the user associated with the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the user associated with the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class);
    }
}
