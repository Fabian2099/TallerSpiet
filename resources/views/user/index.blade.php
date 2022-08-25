@extends('Template.Template')
@section('plantillaweb')
<h2>Listado de servicios</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nombres</th>
        <th scope="col">email</th>
        <th scope="col">contrasena</th>
     </tr>
    </thead>
    <tbody>
        @foreach ($user as $cliente)
        <tr>
           <td>{{$user->id}}</td>
            <td>{{$user->nombres}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->contrasena}}</td>
            @foreach()

            <td>
              <form action="{{route ('clientes.destroy',$user->id)}}" method="POST">
              <a href="{{route('clientes.edit', $user)}} " class="btn btn-warning btn-sm" role="button">Editar</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"  role="button" type="submit">Eliminar</button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $user->links() }}

@endsection