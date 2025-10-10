<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function slot()
    {
        return $this->hasMany(Slot::class);
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
