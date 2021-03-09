@extends('plantilla')

@section('title','Bienvenidos')

@section('contenidoPrincipal')

       <div class="container-fluid">
         <div class="card m-4">
                <div class="card-body">
                
                    <h1 class="text-center m-2 ">Trainee 2021 - Eduardo Madariaga<i class="fas fa-user m-3"></i></h1>
                    
                </div>  
         </div>
                <div class="d-grid gap-2 col-2 mx-auto m-4">
                    <a href="{{ url('procesos') }}" class="btn btn-dark"><i class="fas fa-arrow-right m-1"></i>Ir a Procesos</a>
                </div>
           
        </div>


@endsection
     

       