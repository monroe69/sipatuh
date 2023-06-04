<?php

namespace Modules\K3\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajuan extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
         return $this->belongsTo(User::class) ;
    }
}
