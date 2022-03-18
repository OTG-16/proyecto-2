<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $reglasValidacion = [
        'nombre' => 'required|min:5|max:255',
        'edad' => ['required', 'numeric'],
        'peso' => ['required', 'numeric'],
        'estatura' => ['required', 'numeric'],
        'masa_muscular' => ['required', 'numeric'],
        'grasa_visceral' => ['required', 'numeric'],
        'grasa_corporal' => ['required', 'numeric'],
        'edad_metabolica' => ['required', 'numeric'],
        'diferencia_de_la_edad' => ['required', 'numeric'],
        'medida_de_brazo' => ['required', 'numeric'],
        'medida_de_pecho' => ['required', 'numeric'],
        'medida_de_pierna' => 'required|numeric'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all(); //or get
        return view('personas.indexPersonas', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.formPersonas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate($this->reglasValidacion);
        
        //dd('accede a metodo store');
        //dd($request->all());

        $persona = new Persona();
        $persona ->nombre = $request ->nombre;
        $persona ->edad = $request ->edad;
        $persona ->peso = $request ->peso;
        $persona ->estatura = $request ->estatura;
        $persona ->masa_muscular = $request ->masa_muscular;
        $persona ->grasa_visceral = $request ->grasa_visceral;
        $persona ->grasa_corporal = $request ->grasa_corporal;
        $persona ->edad_metabolica = $request ->edad_metabolica;
        $persona ->diferencia_de_la_edad = $request ->diferencia_de_la_edad;
        $persona ->medida_de_brazo = $request ->medida_de_brazo;
        $persona ->medida_de_pecho = $request ->medida_de_pecho;
        $persona ->medida_de_pierna = $request ->medida_de_pierna;
        $persona ->save();

        return redirect('/persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return view('personas.showPersona', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return view('personas.formPersonas', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $request ->validate($this->reglasValidacion);

        $persona ->nombre = $request ->nombre;
        $persona ->edad = $request ->edad;
        $persona ->peso = $request ->peso;
        $persona ->estatura = $request ->estatura;
        $persona ->masa_muscular = $request ->masa_muscular;
        $persona ->grasa_visceral = $request ->grasa_visceral;
        $persona ->grasa_corporal = $request ->grasa_corporal;
        $persona ->edad_metabolica = $request ->edad_metabolica;
        $persona ->diferencia_de_la_edad = $request ->diferencia_de_la_edad;
        $persona ->medida_de_brazo = $request ->medida_de_brazo;
        $persona ->medida_de_pecho = $request ->medida_de_pecho;
        $persona ->medida_de_pierna = $request ->medida_de_pierna;
        $persona ->save();

        return redirect('/persona/' . $persona->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona ->delete();
        return redirect('/persona');
    }
}
