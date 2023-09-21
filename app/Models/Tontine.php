<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tontine extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function tontineurs()
{
    return $this->belongsToMany(User::class, 'user_id');
}

}
