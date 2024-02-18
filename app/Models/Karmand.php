<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karmand extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function personals()
    {
        return $this->hasMany(Personal::class);
    }

    public function hamsars()
    {
        return $this->hasMany(Hamsar::class);
    }

    public function children()
    {
        return $this->hasMany(Child::class);
    }

    public function takafols()
    {
        return $this->hasMany(Takafol::class);
    }

    public function sokoonats()
    {
        return $this->hasMany(Sokoonat::class);
    }

    public function encouragements()
    {
        return $this->hasMany(Encouragement::class);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
}
