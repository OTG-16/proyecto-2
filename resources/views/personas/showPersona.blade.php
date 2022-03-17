@extends('layouts.plantillabase')

@section('contenido')
<h1>Detalle de Persona</h1>
    <a href="/persona/create" class="btn btn-primary">Agregar nueva persona</a>
    <table class="table table-dark table-striped mt-4">
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

        </tr>

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
            </tr>

    </table>
@endsection

