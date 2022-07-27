<?php

namespace App\Http\Controllers;
use App\Models\OrdenTrabajo;
use Illuminate\Http\Request;

class OrdenTrabajoController extends Controller
{
    //function __construct()
    ///{
    //    $this->middleware('permission:ordentrabajo-list|orden-create|orden-edit|orden-delete', ['only' => ['index','show']]);
    //     $this->middleware('permission:ordentrabajo-create', ['only' => ['create','store']]);
    //     $this->middleware('permission:ordentrabajo-edit', ['only' => ['edit','update']]);
    //    $this->middleware('permission:ordentrabajo-delete', ['only' => ['destroy']]);
    //}

    public function index()
    {

        $ordentrabajo = OrdenTrabajo::latest()->paginate(10);
        return view ('ordentrabajo.index',compact('ordentrabajo'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
}


    public function create()
    {
        return view('ordentrabajo.create');
    }


    public function store(Request $request)
    {
        $imagen = $request-> file('file');
        return response()->json(['imagen'=>$imagen->extension()]);

        $input = $request->validate([
            'Empresa'=>'Min:4|max:20|required',
            'FechaRecepcion'=>'required',
            'NumeroRecibido'=>'required|min:5',
            'Cotizacion'=>'min:4|required',
            'RequeridoPor'=>'min:4|required',
            'Especificaciones'=>'required',
            'Estatus'=>'required',
            'Responsable'=>'required',
            'Cantidad'=>'required|min:1',
            'Notas'=>'max:1000'
        ]);
        OrdenTrabajo::create($input);
        return redirect('ordentrabajo')->with('success', 'Orden Agregada!');
    }


    public function show($id)
    {
        $ordentrabajo = OrdenTrabajo::find($id);
        return view('ordentrabajo.show')->with('ordentrabajo', $ordentrabajo);
    }


    public function edit($id)
    {
        $ordentrabajo = OrdenTrabajo::find($id);
        return view('ordentrabajo.edit')->with('ordentrabajo', $ordentrabajo);
    }


    public function update(Request $request, $id)
    {
        $ordentrabajo = OrdenTrabajo::find($id);
        $input = $request->all();
        $ordentrabajo->update($input);
        return redirect('ordentrabajo')->with('success', 'Orden de trabajo Actualizada!');
    }


    public function destroy($id)
    {
        OrdenTrabajo::find($id)->delete();
        return redirect()->route('ordentrabajo.index')
                        ->with('success', 'Orden de trabajo Eliminada!');
    }

    public function download($uuid)
    {

    }

    public function Imagen (Request $request)
    {


    }
}


