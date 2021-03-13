<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefones extends Model {

    protected $fillable = ['tipoTelefone', 'numeroTelefone', 'clientes_id'];

    public function clientes () {
        return $this->hasMany('App\Clientes');
    }
}

?>