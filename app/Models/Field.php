<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function practices()
    {
        return $this->belongsToMany(Practice::class, 'practice_field', 'field_id', 'practice_id');
    }
}
