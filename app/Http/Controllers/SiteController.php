<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Site::latest()->paginate(5);
        $indexNumber = (request()->input('page', 1) - 1) * 5;
        return view('admin.sites.index', compact('data', 'indexNumber'));
    }

    public function create()
    {
        return view('admin.sites.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', Rule::unique(Site::class)],
            'link' => ['required', Rule::unique(Site::class)],
            'pic' => ['nullable'],
            'desc' => ['nullable'],
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        $newData = new Site();

        $newData->name = $validated['name'];
        $newData->link = $validated['link'];
        $newData->desc = $validated['desc'];
        $newData->pic = $validated['pic'];

        $newData->save();
        // Menyimpan file gambar
        if (isset($validated['logo'])) {
            // Mendapatkan file dari request
            $logo = $validated['logo'];

            $filename = uniqid() . '.webp';
            $path = 'images/' . $filename;
            Storage::put($path, file_get_contents($logo));
            $newData->logo_path = $path;
            $newData->save();
        }

        return redirect()->route('sites.index')
            ->with('success', 'Data Site berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        return view('admin.sites.show', compact('sites'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        $data = $site;
        return view('admin.sites.form-edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        $validated = $request->validate([
            'name' => ['required', Rule::unique(Site::class)->ignore($site)],
            'link' => ['required', Rule::unique(Site::class)->ignore($site)],
            'pic' => ['nullable'],
            'desc' => ['nullable'],
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        $site->name = $validated['name'];
        $site->link = $validated['link'];
        $site->desc = $validated['desc'];
        $site->pic = $validated['pic'];

        if (isset($validated['logo'])) {
            // delete old logo if exist
            if ($site->logo_path) {
                Storage::delete($site->logo_path);
            }

            // Mendapatkan file dari request
            $logo = $validated['logo'];

            $filename = uniqid() . '.webp';
            $path = 'images/' . $filename;
            Storage::put($path, file_get_contents($logo));
            $site->logo_path = $path;
            $site->save();
        }

        $site->save();

        return redirect()->route('sites.index')
            ->with('success', 'Data Site berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        $site->delete();

        if ($site->logo_path) {
            Storage::delete($site->logo_path);
        }

        return redirect()->route('sites.index')
            ->with('success', 'Data berhasil dihapus');
    }

    function visit_link(Site $site) {
        $site->increment('clicks');

        return redirect($site->link);
    }
}
