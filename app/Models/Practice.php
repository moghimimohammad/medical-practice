<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
        'website_url',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    
    public function fields()
    {
        return $this->belongsToMany(Field::class, 'practice_field', 'practice_id', 'field_id');
    }
}
