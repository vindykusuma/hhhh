<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pricelist;
use App\Models\Pesanan;
use App\Models\Jenisfoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\PricelistRequest;
use Symfony\Component\HttpFoundation\Response;

class PricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('pricelist_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pricelists = Pricelist::all();

        return view('admin.pricelists.index', compact('pricelists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('pricelist_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisfotos = Jenisfoto::get()->pluck('name', 'id');

        return view('admin.pricelists.create', compact('jenisfotos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PricelistRequest $request)
    {
        abort_if(Gate::denies('pricelist_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Pricelist::create($request->validated());

        return redirect()->route('admin.pricelists.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

     /**
     * Display Pricelist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pricelist $pricelist)
    {
        abort_if(Gate::denies('pricelist_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pesanans = Pesanan::where('pricelist_id', $pricelist->id)->get();

        return view('admin.pricelists.show', compact('pricelist', 'pesanans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricelist $pricelist)
    {
        abort_if(Gate::denies('pricelist_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisfotos = Jenisfoto::get()->pluck('name', 'id');

        return view('admin.pricelists.edit', compact('pricelist', 'jenisfotos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PricelistRequest $request, Pricelist $pricelist)
    {
        abort_if(Gate::denies('pricelist_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pricelist->update($request->validated());

        return redirect()->route('admin.pricelists.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricelist $pricelists)
    {
        abort_if(Gate::denies('pricelist_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pricelists->delete();

        return redirect()->route('admin.pricelists.index')->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
        /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        abort_if(Gate::denies('pricelist_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Pricelist::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
