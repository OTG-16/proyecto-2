@extends('layouts.plantillabase')

@section('contenido')
    <a href="/persona" class="btn btn-primary">Volver al listado de personas</a>

    <h1>Agregar Persona</h1>
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
        <br>
        <div class="mb-3">
            <label for='nombre'>Nombre de la Persona:</label>
            <input type="text" name="nombre" class="form-control" tabindex="1" value="{{ isset($persona) ? $persona->nombre : '' }} {{ old('nombre') }}"> 
        </div>
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for='edad'>Edad (años):</label>
            <input type="number" id="edad" name="edad" class="form-control" tabindex="2" value="{{ old('edad') ?? $persona->edad ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='peso'>Peso (kg):</label>
            <input type="number" name="peso" step="0.1" class="form-control" tabindex="3" value="{{ old('peso') ?? $persona->peso ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='estatura'>Estatura (m):</label>
            <input type="number" name="estatura" step="0.1" class="form-control" tabindex="4" value="{{ old('estatura') ?? $persona->estatura ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='masa_muscular'>Masa muscular (%):</label>
            <input type="number" name="masa_muscular" step="0.1" class="form-control" tabindex="5" value="{{ old('masa_muscular') ?? $persona->masa_muscular ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='grasa_visceral'>Grasa visceral (%):</label>
            <input type="number" name="grasa_visceral" step="0.1" class="form-control" tabindex="6" value="{{ old('grasa_visceral') ?? $persona->grasa_visceral ?? ''}}">
        </div>
        <div class="mb-3">
        <label for='grasa_corporal'>Grasa corporal (%):</label>
        <input type="number" name="grasa_corporal" step="0.1" class="form-control" tabindex="7" value="{{ old('grasa_corporal') ?? $persona->grasa_corporal ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='edad_metabolica'>Edad metabólica (años):</label>
            <input type="number" id="edad_metabolica" name="edad_metabolica" class="form-control" tabindex="8" value="{{ old('edad_metabolica') ?? $persona->edad_metabolica ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='diferencia_de_la_edad'>Diferencia de la edad (años):</label>
            <input type="number" id="diferencia_de_la_edad" name="diferencia_de_la_edad" tabindex="9" class="form-control" value="{{ old('diferencia_de_la_edad') ?? $persona->diferencia_de_la_edad ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='medida_de_brazo'>Medida de brazo (cm):</label>
            <input type="number" name="medida_de_brazo" step="0.1" class="form-control" tabindex="10" value="{{ old('medida_de_brazo') ?? $persona->medida_de_brazo ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='medida_de_pecho'>Medida de pecho (cm):</label>
            <input type="number" name="medida_de_pecho" step="0.1" class="form-control" tabindex="11" value="{{ old('medida_de_pecho') ?? $persona->medida_de_pecho ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='medida_de_pierna'>Medida de pierna (cm):</label>
            <input type="number" name="medida_de_pierna" step="0.1" class="form-control" tabindex="12" value="{{ old('medida_de_pierna') ?? $persona->medida_de_pierna ?? ''}}">
        </div>
        <input type="submit" value="Guardar" class="btn btn-primary" tabindex="13" />
    </form>
@endsection

