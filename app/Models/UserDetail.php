<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = 'user_details';
    protected $fillable = ['first_name', 'last_name','phone_number'];
    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(Country::class, 'citizenship_country_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
