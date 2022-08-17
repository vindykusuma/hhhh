<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fotografer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\FotograferRequest;
use Symfony\Component\HttpFoundation\Response;

class FotograferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('fotografer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fotografers = Fotografer::all();

        return view('admin.fotografers.index', compact('fotografers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('fotografer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fotografers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FotograferRequest $request)
    {
        abort_if(Gate::denies('fotografer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Fotografer::create($request->validated());

        return redirect()->route('admin.fotografers.index')->with([
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
    public function edit(Fotografer $fotografer)
    {
        abort_if(Gate::denies('fotografer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');



        return view('admin.fotografers.edit', compact('fotografer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FotograferRequest $request, Fotografer $fotografer)
    {
        abort_if(Gate::denies('fotografer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fotografer->update($request->validated());

        return redirect()->route('admin.fotografers.index')->with([
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
    public function destroy(Fotografer $fotografer)
    {
        abort_if(Gate::denies('fotografer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fotografer->delete();

        return redirect()->route('admin.fotografers.index')->with([
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
        abort_if(Gate::denies('fotografer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Fotografer::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
