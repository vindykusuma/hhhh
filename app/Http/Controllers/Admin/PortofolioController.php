<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jenisfoto;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\PortofolioRequest;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort_if(Gate::denies('portofolio_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $portofolios = Portofolio::all();

        return view('admin.portofolios.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // abort_if(Gate::denies('pricelist_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisfotos = Jenisfoto::get()->pluck('name', 'id');

        return view('admin.portofolios.create', compact('jenisfotos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // abort_if(Gate::denies('pricelist_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        // ]);

        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('images');
        }

        Portofolio::create($request->validate());



        return redirect()->route('admin.portofolios.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);

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
        // abort_if(Gate::denies('pricelist_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisfotos = Jenisfoto::get()->pluck('name', 'id');

        return view('admin.portofolios.edit', compact('portofolios', 'jenisfotos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortofolioRequest $request, Portofolio $portofolio)
    {
        // abort_if(Gate::denies('pricelist_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);
        $portofolio->update($request->validated());
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
        }
        $validated['image']=$request->file('image')->store('images');

        return redirect()->route('admin.portofolios.index')->with([
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
    public function destroy(Portofolio $portofolios)
    {
        // abort_if(Gate::denies('pricelist_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        if($portofolios->image){
            Storage::delete($portofolios->image);
        }
        $portofolios->delete();

        return redirect()->route('admin.portofolios.index')->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

}
