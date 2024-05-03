<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Appointment extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['exercise_type', 'slug', 'decided_time', 'user_id', 'coach_id'];

    protected $primaryKey = 'appointment_id';
    
    public function user()  
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'exercise_type'
            ]
        ];
    }
}
