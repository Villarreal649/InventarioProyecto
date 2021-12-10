<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderRequest;
use App\Prestamo;
use App\Producto;
use Gate;
use Illuminate\Http\Request;
use Prestamos;
use Symfony\Component\HttpFoundation\Response;

class PrestamoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-prestamo|crear-prestamo|editar-prestamo|borrar-modelo',['only'=>['index']]);
        $this->middleware('permission:crear-prestamo',['only'=>['create','store']]);
        $this->middleware('permission:editar-prestamo',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-prestamo',['only'=>['destroy']]);

    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('prestamos_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prestamos = Prestamo::with('productos')->get();

        return view('prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        abort_if(Gate::denies('prestamo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productos = Producto::all();

        return view('prestamos.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $prestamo = Prestamo::create($request->all());

        $productos = $request->input('productos', []);
        $quantities = $request->input('quantities', []);
        for ($producto=0; $producto < count($productos); $producto++) {
            if ($productos[$producto] != '') {
                $prestamo->productos()->attach($productos[$producto], ['quantity' => $quantities[$producto]]);
            }
        }

        return redirect()->route('prestamos.index');
    }

    public function edit(Prestamo $prestamo)
    {
        abort_if(Gate::denies('order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all();

        $order->load('products');

        return view('admin.orders.edit', compact('products', 'order'));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->all());

        $order->products()->detach();
        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
            }
        }

        return redirect()->route('admin.orders.index');
    }

    public function show(Order $order)
    {
        abort_if(Gate::denies('order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order->load('products');

        return view('admin.orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        abort_if(Gate::denies('order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderRequest $request)
    {
        Order::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
