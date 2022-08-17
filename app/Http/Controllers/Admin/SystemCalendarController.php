<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Pricelist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Pesanan;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => Pesanan::class,
            'date_field' => 'time_from',
            'date_field_to' => 'time_to',
            'field'      => 'additional_information',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'admin.pesanans.edit',
        ],
    ];

    public function index(Request $request)
    {
        $pesanans = [];
        $pricelists = Pricelist::all()->pluck('nama_paket', 'id');
        $pelanggans = Pelanggan::all()->pluck('full_name', 'id');

        foreach ($this->sources as $source) {
            $models = $source['model']::when($request->input('pricelist_id'), function ($query) use ($request) {
                    $query->where('pricelist_id', $request->input('pricelist_id'));
                })
                ->when($request->input('pelanggan_id'), function ($query) use ($request) {
                    $query->where('pelanggan_id', $request->input('pelanggan_id'));
                })
                ->get();
            foreach ($models as $model) {
                $crudFieldValue = $model->getOriginal($source['date_field']);
                $crudFieldValueTo = $model->getOriginal($source['date_field_to']);

                if (!$crudFieldValue && $crudFieldValueTo) {
                    continue;
                }

                $pesanans[] = [
                    'title' => trim($source['prefix'] . " " . $model->{$source['field']}
                        . " " . $source['suffix']),
                    'start' => $crudFieldValue,
                    'end' => $crudFieldValueTo,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('pesanans', 'pricelists', 'pelanggans'));

    }

}
