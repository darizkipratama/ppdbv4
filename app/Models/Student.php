<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cost_category()
    {
        return $this->belongsTo(CostCategory::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
