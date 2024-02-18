<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sokoonat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function karmand()
    {
        return $this->belongsTo(Karmand::class);
    }
}
