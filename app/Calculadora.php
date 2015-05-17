<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model {

  public function sumar()
  {
    $suma = $this->attributes['valorUno'] + $this->attributes['valorDos'];
    $this->attributes['resultado'] = $suma;
    return $this->attributes['resultado'];
  }
}
