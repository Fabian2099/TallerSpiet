@extends('Template.Template')
@section('plantillaweb')

<h2>Formulario ingreso</h2>
<form action="{{route('user.create')}}" name="user" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}


    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">nombres</label>
            <input type="nombres" class="form-control" id="inputEmail4">
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">contrasena</label>
          <input type="contrasena" class="form-control" id="inputPassword4">
        </div>
        
      </form>
        
      <div class="row">
      <div class="col-lg-6 col-md-6 offset-md-3">
        <input type="submit" name="btn_enviar" value="Aceptar">
      </div>
      </div>
</form>

<script>
</script>
@endsection