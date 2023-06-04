<?php

namespace Modules\K3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reportingdoc extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\K3\Database\factories\ReportingdocFactory::new();
    }
}
