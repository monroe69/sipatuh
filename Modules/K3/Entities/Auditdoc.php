<?php

namespace Modules\K3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auditdoc extends Model
{
    use HasFactory;

    protected $guarded= ['created_at'];
    
    protected static function newFactory()
    {
        return \Modules\K3\Database\factories\AuditdocFactory::new();
    }
}
