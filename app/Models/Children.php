<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;

    protected $table = 'childrens';

    protected $fillable = [
        'name',
        'age',
        'parents_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }
    
}
