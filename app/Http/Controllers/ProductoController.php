<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        
        //$lista = Producto::all();
        //$lista = Producto::orderBy('id')->paginate(10);
        $lista = Producto::orderBy('id')->simplePaginate(10);

        return view('productos.index', compact('lista') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*
        $datos = Producto::create( $request->all() );
        return redirect()->route('productos.edit', $datos->id)->with('lblmensaje', 'Producto ingresado OK');
        */

        $datos = Producto::create(
            [
                'nombre' => $request->txtnombre,
                'precio' => $request->txtprecio
            ]
        );

        return redirect()->route('productos.edit', $datos->id)->with('lblmensaje', 'Producto ingresado OK');     


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
        $datos = Producto::find($id);
        return view('productos.show', compact('datos') );
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
        $datos = Producto::find($id);
        return view('productos.edit', compact('datos') );        
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
        /*
        $datos = Producto::find($id);

        $datos->fill( $request->all() )->save();

        return redirect()->route('productos.edit', $datos->id );//->with('lblmensaje', 'Producto actualizado OK');
        */

        //QUEDAMOS POR AQUI, MUESTRA ERROR AL INETNATR ACTUALIZAR 
        //TODOS LOS DATOS DE LOS PRODUCTOS
        $datos = Producto::find($id);
        $datos->nombre = $request->input('txtnombre');
        $datos->precio = $request->input('txtprecio');   
        $datos->save();  
        return redirect()->route('productos.edit', $datos->id )->with('lblmensaje', 'Producto actualizado OK con ID = ' . $datos->id);

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
        /*
        $respuesta = Producto::findOrFail($id)->delete();
        dd($respuesta);
        findOrFail(1)->delete();
        */

        $pro = Producto::find($id);
        if( $pro ){
            $pro->delete();
            return back()->with('lblmensaje', 'Producto con ID = ' . $id . ' eliminado OK');
        }

        /*
        $lista = Producto::orderBy('id')->simplePaginate(10);
        return view('productos.index', compact('lista') );        
        */
        
        //$respuesta = Producto::find($id)->delete();        
        
    }
}
