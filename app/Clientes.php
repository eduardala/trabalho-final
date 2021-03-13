<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model {

    protected $fillable = ['nome', 'sexo'];

    public function telefones () {
        return $this->belongsTo('App\Telefones', 'clientes_id');
    }

    public function documentos () {
        return $this->hasMany('App\Documentos');
    }

    function clientespedidos() {
        return $this->belongToMany('App\Pedidos', 'descricao')->withPivot('id');
    }

}

?>