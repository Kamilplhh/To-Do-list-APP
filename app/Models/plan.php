<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tag;

class plan extends Model
{
    use HasFactory;

    public function tag()
    {
        return $this->belongsTo(tag::class);
    }

    protected $fillable = [
        'description',
        'important',
        'userid',
        'done',
        'date',
        'tag_id'
    ];
}
