<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'image',
        'phone',
        'position',
        'division_id'
    ];
    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * Get the division that owns the employee
     */
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
