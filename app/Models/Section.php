<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class section extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sections';
    protected $fillable = [
        'id', 'name'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'section_id');
    }

}
