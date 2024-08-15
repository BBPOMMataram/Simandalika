<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataReource;
use App\Http\Resources\DataResource;
use App\Models\Perencanaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Perencanaan::latest()->paginate(5);
        $indexNumber = (request()->input('page', 1) - 1) * 5;
        return view('perencanaan.index', compact('data', 'indexNumber'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perencanaan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => ['required', Rule::unique(Perencanaan::class)],
            'link' => ['required', Rule::unique(Perencanaan::class)],
            'desc' => ['nullable']
        ]);

        $newData = new Perencanaan();

        $newData->name = $validated['name'];
        $newData->link = $validated['link'];
        $newData->desc = $validated['desc'];

        $newData->save();

        return redirect()->route('perencanaan.index')
        ->with('success', 'Data Perencanaan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perencanaan $perencanaan)
    {
        return view('perencanaan.show', compact('perencanaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perencanaan $perencanaan)
    {
        return view('perencanaan.form-edit',compact('perencanaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perencanaan $perencanaan)
    {
        $validated = $this->validate($request, [
            'name' => ['required', Rule::unique(Perencanaan::class)->ignore($perencanaan)],
            'link' => ['required', Rule::unique(Perencanaan::class)->ignore($perencanaan)],
            'desc' => ['nullable']
        ]);

        $perencanaan->name = $validated['name'];
        $perencanaan->link = $validated['link'];
        $perencanaan->desc = $validated['desc'];

        $perencanaan->save();

        return redirect()->route('perencanaan.index')
        ->with('success', 'Data Perencanaan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perencanaan $perencanaan)
    {
        $perencanaan->delete();

        return redirect()->route('perencanaan.index')
        ->with('success', 'Data berhasil dihapus');
    }

    function data_api() {

        $data = Perencanaan::all();

        return DataResource::collection($data);
    }
}
