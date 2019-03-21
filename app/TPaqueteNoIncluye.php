<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPaqueteNoIncluye extends Model
{
    protected $table = "tpaquetenoincluye";

    public function paquetes()
    {
        return $this->belongsTo(TPaquete::class, 'idpaquetes');
    }

    public function no_incluye()
    {
        return $this->belongsTo(TNoIncluye::class, 'idnoincluye');
    }
}
