<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'date', 'area', 'level', 'categories', 'participant', 'organizer', 'desc', 'image'];

    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'achievement_staff');
    }

    public function alumni()
    {
        return $this->belongsToMany(Alumni::class, 'achievement_alumni');
    }
}
