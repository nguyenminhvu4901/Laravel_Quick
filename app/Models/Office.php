<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $table = "offices";

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_office', 'office_id', 'user_id');
    }
}
