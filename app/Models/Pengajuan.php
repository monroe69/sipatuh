<?php

namespace App\Models;

use Modules\K3\Entities\Leadershipdoc;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajuan extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function leadershipdoc()
    {
         return $this->belongsTo(Leadershipdoc::class) ;
    }
}
