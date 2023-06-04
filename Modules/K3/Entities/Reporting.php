<?php

namespace Modules\K3\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reporting extends Model
{
    use HasFactory;

    protected $guarded = [];
    
  public function user()
    {
         return $this->belongsTo(User::class) ;
    }
}
