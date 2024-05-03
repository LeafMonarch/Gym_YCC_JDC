<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Exercise extends Model
{
    use HasFactory;
    // use Sluggable;

    protected $fillable = ['exercise_type', 'exercise_intensity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'exercise_type'
    //         ]
    //     ];
    // }
}
