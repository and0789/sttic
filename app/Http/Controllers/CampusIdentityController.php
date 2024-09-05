<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampusIdentityRequest;
use App\Models\CampusIdentity;
use Illuminate\Http\Request;

class CampusIdentityController extends Controller
{
    public function index()
    {
        $campus = CampusIdentity::all();

        return view('admin.campus-identity.index', compact('campus'));
    }

    public function create()
    {
        return view('admin.campus-identity.form', [
            'campus' => new CampusIdentity(),
            'page_meta' => [
                'title' => 'Input Data Kampus',
                'method' => 'POST',
                'url' => route('campus-identity.store'),
                'submit_text' => 'Simpan'
            ]
        ]);
    }

    public function store(CampusIdentityRequest $request) {
        CampusIdentity::create($request->validated());
        return to_route('admin.campus-identity.index')->with('success', 'Data berhasil disimpan');
    }

    public function show(CampusIdentity $campusIdentity)
    {
        return view('admin.campus-identity.show', compact('campusIdentity'));
    }

    public function edit(CampusIdentity $campusIdentity)
    {
        return view('admin.campus-identity.form', [
            'campus' => new CampusIdentity(),
            'page_meta' => [
                'title' => 'Edit Data Kampus',
                'method' => 'PUT',
                'url' => route('campus-identity.store', ['campusIdentity' => $campusIdentity]),
                'submit_text' => 'Update'
            ]
        ]);
    }

    public function update(CampusIdentityRequest $request, CampusIdentity $campusIdentity)
    {
        $campusIdentity->update($request->validated());
        return to_route('admin.campus-identity.index')->with('success', 'Data berhasil disimpan');
    }

    public function destroy(CampusIdentity $campusIdentity)
    {
        $campusIdentity->delete();
        return to_route('admin.campus-identity.index')->with('success', 'Data berhasil dihapus');
    }

}
