<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Division extends Model
{
    protected $fillable = [
        'name'
    ];
    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * Get the employees for the division.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
