<?php

namespace Modules\K3\Entities;

use App\Models\Pengajuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class leadershipdoc extends Model
{
    use HasFactory;

    protected $guarded = ['created_at'];
    
   public function leadership()
    {
         return $this->belongsTo(User::class) ;
    }
    public function pengajuan()
    {
         return $this->belongsTo(Pengajuan::class) ;
    }
}

