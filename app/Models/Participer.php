<?php

namespace App\Models;

use App\Models\Tontine;
use App\Models\Tontineur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participer extends Model
{
    use HasFactory;
    
    protected $guarded = [''];

    public function tontineur()
{
    return $this->belongsToMany(Tontineur::class);
}

public function tontine()
{
    return $this->belongsTo(Tontine::class);
}

}
