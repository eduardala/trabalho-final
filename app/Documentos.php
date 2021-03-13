<?php

namespace App;
use App\Clientes;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model {

    protected $fillable = ['tipoDocumento', 'numeroDocumento', 'clientes_id'];

    public function clientes()
    {
        return $this->belongsTo('App\Clientes');
    }

}

?>