<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jenisfoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\JenisfotoRequest;
use Symfony\Component\HttpFoundation\Response;

class JenisfotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('jenisfoto_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisfotos = Jenisfoto::all();

        return view('admin.jenisfotos.index', compact('jenisfotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('jenisfoto_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jenisfotos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JenisfotoRequest $request)
    {
        abort_if(Gate::denies('jenisfoto_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Jenisfoto::create($request->validated());

        return redirect()->route('admin.jenisfotos.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenisfoto $jenisfoto)
    {
        abort_if(Gate::denies('jenisfoto_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jenisfotos.edit', compact('jenisfoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JenisfotoRequest $request, Jenisfoto $jenisfoto)
    {
        abort_if(Gate::denies('jenisfoto_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisfoto->update($request->validated());

        return redirect()->route('admin.jenisfotos.index')->with([
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
    public function destroy(Jenisfoto $jenisfoto)
    {
        abort_if(Gate::denies('jenisfoto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisfoto->delete();

        return redirect()->route('admin.jenisfotos.index')->with([
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
        abort_if(Gate::denies('jenisfoto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Jenisfoto::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
