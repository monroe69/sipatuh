<?php

namespace Modules\K3\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class audit extends Model
{
    use HasFactory;

    protected $guarded = [];
    
//     public function scopeFilter($query, array $filters)
//     {
//      $query ->when ($filters['search'] ?? false, function ($query,$search){
//           return $query->where('sub_kriteria','like','%'. $search . '%')
//           ->orWhere('divisi','like','%'. $search . '%');
//      });
//      $query ->when ($filters['user'] ?? false, fn ($query,$user) =>
//       $query->whereHas('user',fn($query) =>
//       $query->where('name', $user)
//       )
//      );    
//     }
    public function user()
    {
         return $this->belongsTo(User::class) ;
    }
}
