<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'user_id',
        'path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
