<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = "courses";
    protected $primaryKey = "course_id";

    protected $fillable = [
        'course_name',
        'course_level',
        'course_duration',
        'course_description',
        'price',
        'course_provider',
        'course_category',
        'start_date',
        'end_date',
        'image_path',
        'course_rating',
    ];
}
