<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Models\{
    Modulo, Pagina, Titular, Persona
};

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use DB;

class TitularController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        
        $frontend =  DB::table('frontend')
        ->where([
            'Estado'   => 1
        ])
        ->orderBy('ID')
        ->get();


        $a_data_page = array(
            'title' => 'Lista de Titular',
            'pagina'=> $frontend
        );

        return \Views::admin('titular.index',$a_data_page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $institucion    =  $this->diccionario('idInstruccion');
        $ingreso        =  $this->diccionario('idIngreso');
        $civil          =  $this->diccionario('idCivil');
        $relacion       =  $this->diccionario('idRelacion');


        $departamento =  DB::table('departamento')
        ->where([
            'estado'   => 1
        ])->orderBy('descripcion','DESC')->get();

        // dd($departamento);

        $a_data_page = array(
            'title'         => 'Registro de Titular',
            'institucion'   => $institucion,
            'ingreso'       => $ingreso,
            'civil'         => $civil,
            'relacion'      => $relacion,
            'departamento'  => $departamento
        );

        return \Views::admin('titular.create',$a_data_page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('copiaDni');
        // $nombre = $file->getClientOriginalName();
        dd($file);
        die();
        $validator = Validator::make($request->all(), [
        // $validator = $request->validate([
           'nombre'     => "nullable",
           'apaterno'   => "nullable",
           'amaterno'   => "nullable",
            "departamento" => "nullable",
            "provincia" => "nullable",
            "distrito"  => "nullable",
            "grado"     => "nullable",
            "fingreso"  => "nullable",
            "nroRecibo" => "nullable",
            "dni"       => "nullable",
            "ocupacion" => "nullable",
            "sexo"      => "nullable",
            "ecivil"    => "nullable",
            "esocio"    => "nullable",
            "ecarnet"    => "nullable",
            "ctarjeta"    => "nullable",
        ]);

        if ($validator->fails()) {    
            return response()->json($validator->messages(), 200);
        }

        $file = $request->file('imagen');
        $nombre = $file->getClientOriginalName();
        

        $persona = new Persona;
        $persona->nombre            = $request->input('nombre');
        $persona->apellidoPaterno   = $request->input('apaterno');
        $persona->apellidoMaterno   = $request->input('amaterno');
        $persona->fechaNacimiento   = $request->input('nacimiento');
        $persona->dni               = $request->input('dni');
        $persona->sexo              = $request->input('sexo');
        $persona->idInstruccion     = $request->input('grado');
        $persona->entregoCarnet     = $request->input('ecarnet');
        $persona->codigoTarjeta     = $request->input('ctarjeta');

        $personaid = $persona->save();

        $titular = new Titular;
        $titular->idPersona     = $personaid;
        $titular->idCivil       = $request->input('ecivil');
        $titular->ocupacion     = $request->input('ocupacion');
        $titular->aFotografia   = $nombre;
        $titular->idIngreso     = $request->input('ingreso');
        $titular->estadoSocio   = $request->input('esocio');
        $titular->anioGestion   = 2019;
        $titular->nroRecibo     = $request->input('nroRecibo');
        $titular->fechaIngreso  = $request->input('fingreso');
        $titular->aDNI          = $request->input('dni');
        $titular->save();



        return redirect()->route('admin.titular_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function diccionario($identificador)
    {
        $data =  DB::table('diccionario')
        ->where([
            'ubicacion'=> $identificador
        ])
        ->orderBy('codigo')
        ->get();

        return $data;
    }
}

