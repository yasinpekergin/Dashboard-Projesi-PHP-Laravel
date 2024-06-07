<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'company_name',
        'department_name',
        'department_webside',
        'mission_name',
        'is_active',
        'description',
        'user_id',
        'started_date',
        'expired_date',
    ];
    public function User() {
        return $this->belongsToMany(User::class);
    }
}

