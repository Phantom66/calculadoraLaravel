@extends('/app')

@section('content')

  <div class="container well">
    <div class="row text-center">
      <h2>Calculadora</h2>
    </div>
      <form class="form-horizontal" method="POST" action="/calculadora" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="formGroup" class="col-sm-2 control-label">Primer Valor</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" name="valorUno" placeholder="Valor Numerico">
          </div>
        </div>
          <div class="form-group">
            <label for="formGroup" class="col-sm-2 control-label">Segundo Valor</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" name="valorDos" placeholder="Valor Numerico">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-2 col-md-offset-3">
            <select name="operando" class="form-control">
              <option value="">Seleccionar</option>
              <option value="1">Suma</option>
              <option value="2">Resta</option>
              <option value="3">Multiplicar</option>
              <option value="4">Dividir</option>
            </select>
          </div>

        </div>
        <div class="form-group">
          <label for="formGroup"
            class="col-sm-2 control-label"></label>

            <div class="col-sm-4">
                <button type="submit"
                class="btn btn-success btn-lg">
              <span class="glyphicon glyphicon-floppy-disk">
                </span>Enviar</button>
              </div>
            </div>

    </form>
</div>
@endsection()
