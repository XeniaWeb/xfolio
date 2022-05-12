<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'works';

    protected $casts = [
        'technologies' => 'json',
    ];
    protected $fillable = [
        'title',
        'description',
        'work_image',
        'link',
        'github_link',
        'technologies',
        'comment',
    ];
}
