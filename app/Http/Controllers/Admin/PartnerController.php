<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $partners = Partner::when($search, function ($q, $search) {
            return $q->where('name', 'LIKE', "%{$search}%");
        })->latest()->paginate(10);

        return view('admin.partners.index', compact('partners', 'search'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string',
            'description' => 'nullable|string',
            'website' => 'nullable|url',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'is_active' => 'nullable|boolean',
            'logo' => 'nullable|image|max:2048'
        ]);

        $data = $request->only(['name', 'type', 'description', 'website', 'contact_email', 'contact_phone']);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('partners', 'public');
            $data['logo_path'] = $path;
        }

        Partner::create($data);

        return redirect()->route('admin.partners.index')->with('success', 'Partner ditambahkan.');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string',
            'description' => 'nullable|string',
            'website' => 'nullable|url',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'is_active' => 'nullable|boolean',
            'logo' => 'nullable|image|max:2048'
        ]);

        $data = $request->only(['name', 'type', 'description', 'website', 'contact_email', 'contact_phone']);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($partner->logo_path) {
                Storage::disk('public')->delete($partner->logo_path);
            }
            $path = $request->file('logo')->store('partners', 'public');
            $data['logo_path'] = $path;
        }

        $partner->update($data);

        return redirect()->route('admin.partners.index')->with('success', 'Partner diperbarui.');
    }

    public function destroy(Partner $partner)
    {
        if ($partner->logo_path) {
            Storage::disk('public')->delete($partner->logo_path);
        }
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partner dihapus.');
    }
}