<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Persona</h1>
    <a href="/personas">Volver al listado de personas</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($persona)
        <form action="/personas/store" method="POST"> {{-- Actualizar (update) --}}
        @method('PATCH')
    @else
        <form action="/persona" method="POST"> {{-- Crear --}}
    @endisset
    
        @csrf
        <label for='persona'>Nombre de la Persona:</label>
        <input type="text" name="persona" value="{{ isset($persona) ? $persona->persona : '' }} {{ old('persona') }}"> 
        @error('persona')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for='edad'>Edad (años):</label>
        <input type="number" id="edad" name="edad">
        <br>
        <label for='peso'>Peso (kg):</label>
        <input type="number" name="peso" step="0.1">
        <br>
        <label for='estatura'>Estatura (m):</label>
        <input type="number" name="estatura" step="0.1">
        <br>
        <label for='masamuscular'>Masa muscular (%):</label>
        <input type="number" name="masamuscular" step="0.1">
        <br>
        <label for='grasaviscelar'>Grasa viscelar (%):</label>
        <input type="number" name="grasaviscelar" step="0.1">
        <br>
        <label for='grasacorporal'>Grasa corporal (%):</label>
        <input type="number" name="grasacorporal" step="0.1">
        <br>
        <label for='edadmetabolica'>Edad metabólica (años):</label>
        <input type="number" id="edadmetabolica" name="edadmetabolica">
        <br>
        <label for='diferenciadelaedad'>Diferencia de la edad (años):</label>
        <input type="number" id="diferenciadelaedad" name="diferenciadelaedad">
        <br>
        <label for='medidadebrazo'>Medida de brazo (cm):</label>
        <input type="number" name="medidadebrazo" step="0.1">
        <br>
        <label for='medidadepecho'>Medida de pecho (cm):</label>
        <input type="number" name="medidadepecho" step="0.1">
        <br>
        <label for='medidadepierna'>Medida de pierna (cm):</label>
        <input type="number" name="medidadepierna" step="0.1">
        <br>
        <input type="submit" value="Guardar" />
    </form>
</body>
</html>