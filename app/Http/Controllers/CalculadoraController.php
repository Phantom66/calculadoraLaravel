<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Calculadora;

class CalculadoraController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return 'esto es el index de las calculadoras!';
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('calculadora.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $datos)
  {
    $operando = $datos->input('operando');

    if ($operando === '')
    {
      return redirect()->action('CalculadoraController@create');
    }

    $calculadora = new Calculadora;

    if($operando === '1')
    {
      $calculadora->valorUno = $datos->input('valorUno');
      $calculadora->valorDos = $datos->input('valorDos');
      $calculadora->sumar();
      return $calculadora->resultado;
    }
    elseif($operando === '2')
    {
      return 'restando';
    }
    elseif($operando === '3')
    {

    }
    elseif($operando === '4')
    {

    }
    return $datos->input('valorDos');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }

}
