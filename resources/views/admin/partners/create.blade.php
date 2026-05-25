@extends('layouts.admin')
@section('title', 'Tambah Partner - Admin')

@section('page_title', 'Tambah Partner Baru')
@section('page_subtitle', 'Lengkapi formulir di bawah untuk menambahkan partner atau kolaborator.')

@section('content')
<div class="max-w-5xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-0">
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 px-6 py-4">
            <h2 class="text-white text-xl font-semibold">📋 Formulir Partner</h2>
            <p class="text-indigo-100 text-sm">Isi data partner dengan lengkap</p>
        </div>

        <form method="POST" action="{{ route('admin.partners.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="p-6">
                {{-- Layout 2 kolom --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    {{-- Kolom Kiri: Logo & Status --}}
                    <div class="lg:col-span-1 space-y-5">
                        {{-- Card Upload Logo --}}
                        <div class="bg-gray-50 rounded-xl p-5 text-center border border-dashed border-gray-300 hover:border-indigo-400 transition">
                            <div class="mb-3">
                                <div id="logoPreview" class="w-28 h-28 mx-auto rounded-full bg-gray-200 flex items-center justify-center text-4xl overflow-hidden">
                                    🖼️
                                </div>
                            </div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Logo Partner</label>
                            <input type="file" name="logo" id="logoInput" accept="image/*" class="text-sm w-full file:mr-2 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-sm file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <p class="text-xs text-gray-400 mt-2">JPEG, PNG, GIF. Max 2MB</p>
                            @error('logo') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        {{-- Status Switch --}}
                        <div class="bg-gray-50 rounded-xl p-5 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="text-lg">🔘</span>
                                <span class="font-semibold text-gray-700">Status Aktif</span>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="is_active" value="1" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                            </label>
                        </div>
                    </div>

                    {{-- Kolom Kanan: Form Data --}}
                    <div class="lg:col-span-2 space-y-5">
                        {{-- Nama & Jenis Partner (2 kolom) --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Nama Partner <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition">
                                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Jenis Partner <span class="text-red-500">*</span></label>
                                <select name="type" required class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                                    <option value="">-- Pilih --</option>
                                    @foreach(['Game Partner', 'Educational Partner', 'Startup Partner', 'Music Partner', 'Art Partner'] as $type)
                                        <option value="{{ $type }}" {{ old('type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                                @error('type') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Deskripsi --}}
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Deskripsi</label>
                            <textarea name="description" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">{{ old('description') }}</textarea>
                            @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        {{-- Website --}}
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Website</label>
                            <input type="url" name="website" value="{{ old('website') }}" placeholder="https://example.com"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                            @error('website') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        {{-- Kontak (email & telepon) --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Email Kontak</label>
                                <input type="email" name="contact_email" value="{{ old('contact_email') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                                @error('contact_email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Nomor Telepon</label>
                                <input type="text" name="contact_phone" value="{{ old('contact_phone') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                                @error('contact_phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="bg-gray-50 px-6 py-4 flex justify-end gap-3 border-t">
                <a href="{{ route('admin.partners.index') }}" class="px-6 py-2.5 border border-gray-300 rounded-xl font-semibold text-gray-700 hover:bg-gray-100 transition">Batal</a>
                <button type="submit" class="px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white rounded-xl font-semibold hover:from-indigo-700 hover:to-indigo-800 shadow-md transition active:scale-95">
                    💾 Simpan Partner
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Script preview logo --}}
<script>
    document.getElementById('logoInput').addEventListener('change', function(e) {
        const preview = document.getElementById('logoPreview');
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                preview.innerHTML = `<img src="${event.target.result}" class="w-full h-full object-cover rounded-full">`;
            };
            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = '🖼️';
        }
    });
</script>
@endsection