<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takafol extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function karmand()
    {
        return $this->belongsTo(Karmand::class);
    }

    public function hamsar()
    {
        return $this->belongsTo(Hamsar::class);
    }

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
}
