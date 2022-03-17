<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
    <h1>Listado de Personas</h1>
    <a href="/persona/create">Agregar nueva persona</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Peso</th>
            <th>Estatura</th>
            <th>Masa muscular</th>
            <th>Grasa visceral</th>
            <th>Grasa corporal</th>
            <th>Edad metabólica</th>
            <th>Diferencia de la edad</th>
            <th>Medida de brazo</th>
            <th>Medida de pecho</th>
            <th>Medida de pierna</th>

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
</body>
</html>