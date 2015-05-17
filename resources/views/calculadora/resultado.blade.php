@extends('/app')

@section('content');
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Calculadora Sencilla</h1>
        <h4>Resultado de la {{ $operacion }}: </h4>
        <h2>{{ $resultado	}}</h2>
      </div>
    </div>
  </div>
@stop
