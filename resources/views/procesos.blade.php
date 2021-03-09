@extends('plantilla')

@section('title','Procesos')

@section('contenidoPrincipal')

<div class="container">

  <div class="card">

  <div class="card-body">

  <table border="1" class="table table-hover" id="procesos">
  <thead>
      <tr>
          <h1 class="text-center">Procesos</h1>
          
      </tr>
      <tr>   
        <th><i class="fas fa-user m-2"></i>Nombre</th>
        <th><i class="fas fa-envelope m-2"></i>Email</th>
        <th><i class="fas fa-briefcase m-2"></i>Cargo</th>
      
      </tr>
  </thead>
  <tbody>
      @foreach ($resProcesos as $proceso)
      <tr>
        <td>{{ $proceso->nombre}}</td>
        <td>{{ $proceso->emailOwner}}</td>
        <td>{{ $proceso->cargo}}</td>
      </tr>
      @endforeach

  </tbody>

  </table>
    </div>
  </div>


</div>

@endsection

@section('scripts')
   <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#procesos').DataTable();
    </script>
@endsection







    
