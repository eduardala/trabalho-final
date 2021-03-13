<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ClientesPedidos extends Model {

    protected $fillable = ['clientes_id', 'pedidos_id'];
    
    public function clientes(){
        return $this->belongsTo('App\Clientes');
    }

    public function pedidos(){
        return $this->belongsTo('App\Pedidos');
    }
}

?>