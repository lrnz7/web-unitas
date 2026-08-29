<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = ['id'];
    
    protected $casts = [
        'tupoksi' => 'array',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}