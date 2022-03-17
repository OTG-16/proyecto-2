@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css' rel="stylesheet">
@endsection

@section('contenido')
    <a href="/persona/create" class="btn btn-primary">Agregar nueva persona</a>
    
    <h1>Tabla de Personas</h1>
    <table id="personas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Peso</th>
                <th scope="col">Estatura</th>
                <th scope="col">Masa muscular</th>
                <th scope="col">Grasa visceral</th>
                <th scope="col">Grasa corporal</th>
                <th scope="col">Edad metabólica</th>
                <th scope="col">Diferencia de la edad</th>
                <th scope="col">Medida de brazo</th>
                <th scope="col">Medida de pecho</th>
                <th scope="col">Medida de pierna</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td>{{$persona->id}}</td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->edad}}</td>
                    <td>{{$persona->peso}}</td>
                    <td>{{$persona->estatura}}</td>
                    <td>{{$persona->masa_muscular}}</td>
                    <td>{{$persona->grasa_visceral}}</td>
                    <td>{{$persona->grasa_corporal}}</td>
                    <td>{{$persona->edad_metabolica}}</td>
                    <td>{{$persona->diferencia_de_la_edad}}</td>
                    <td>{{$persona->medida_de_brazo}}</td>
                    <td>{{$persona->medida_de_pecho}}</td>
                    <td>{{$persona->medida_de_pierna}}</td>
                    <td>
                        <a href="/persona/{{ $persona->id }}" class="btn btn-primary">Ver detalle</a>
                        <a href="/persona/{{ $persona->id }}/edit" class="btn btn-info">Editar</a>
                        <form action="/persona/{{ $persona->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#personas').DataTable({
                "lengthMenu": [[5,10,50,-1], [5,10,50,"All"]]
            });
        } );
    </script>
    @endsection

@endsection


