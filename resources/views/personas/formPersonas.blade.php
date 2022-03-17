<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Agregar Persona</h1>
    <a href="/persona">Volver al listado de personas</a>

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
        <form action="/persona/{{ $persona->id }}" method="POST"> {{-- Actualizar (update) --}}
        @method('PATCH')
    @else
        <form action="/persona" method="POST"> {{-- Crear --}}
    @endisset
    
        @csrf
        <label for='nombre'>Nombre de la Persona:</label>
        <input type="text" name="nombre" value="{{ isset($persona) ? $persona->nombre : '' }} {{ old('nombre') }}"> 
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for='edad'>Edad (años):</label>
        <input type="number" id="edad" name="edad" value="{{ isset($persona) ? $persona->edad : '' }} {{ old('edad') }}">
        <br>
        <label for='peso'>Peso (kg):</label>
        <input type="number" name="peso" step="0.1" value="{{ isset($persona) ? $persona->peso : '' }} {{ old('peso') }}">
        <br>
        <label for='estatura'>Estatura (m):</label>
        <input type="number" name="estatura" step="0.1" value="{{ isset($persona) ? $persona->estatura : '' }} {{ old('estatura') }}">
        <br>
        <label for='masa_muscular'>Masa muscular (%):</label>
        <input type="number" name="masa_muscular" step="0.1" value="{{ isset($persona) ? $persona->masa_muscular : '' }} {{ old('masa_muscular') }}">
        <br>
        <label for='grasa_visceral'>Grasa visceral (%):</label>
        <input type="number" name="grasa_visceral" step="0.1" value="{{ isset($persona) ? $persona->grasa_visceral : '' }} {{ old('grasa_visceral') }}">
        <br>
        <label for='grasa_corporal'>Grasa corporal (%):</label>
        <input type="number" name="grasa_corporal" step="0.1" value="{{ isset($persona) ? $persona->grasa_corporal : '' }} {{ old('grasa_corporal') }}">
        <br>
        <label for='edad_metabolica'>Edad metabólica (años):</label>
        <input type="number" id="edad_metabolica" name="edad_metabolica" value="{{ isset($persona) ? $persona->edad_metabolica : '' }} {{ old('edad_metabolica') }}">
        <br>
        <label for='diferencia_de_la_edad'>Diferencia de la edad (años):</label>
        <input type="number" id="diferencia_de_la_edad" name="diferencia_de_la_edad" value="{{ isset($persona) ? $persona->diferencia_de_la_edad : '' }} {{ old('diferencia_de_la_edad') }}">
        <br>
        <label for='medida_de_brazo'>Medida de brazo (cm):</label>
        <input type="number" name="medida_de_brazo" step="0.1" value="{{ isset($persona) ? $persona->medida_de_brazo : '' }} {{ old('medida_de_brazo') }}">
        <br>
        <label for='medida_de_pecho'>Medida de pecho (cm):</label>
        <input type="number" name="medida_de_pecho" step="0.1" value="{{ isset($persona) ? $persona->medida_de_pecho : '' }} {{ old('medida_de_pecho') }}">
        <br>
        <label for='medida_de_pierna'>Medida de pierna (cm):</label>
        <input type="number" name="medida_de_pierna" step="0.1" value="{{ isset($persona) ? $persona->medida_de_pierna : '' }} {{ old('medida_de_pierna') }}">
        <br>
        <input type="submit" value="Guardar" />
    </form>
</body>
</html>