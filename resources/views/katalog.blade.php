@extends('layouts.app')

@section('title', 'Katalog Event')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">Katalog Event</h1>
        <p class="text-xl text-slate-500 max-w-2xl mx-auto">Temukan dan beli tiket event-event menarik di Amikom</p>
    </div>

    @if(isset($categories) && $categories->count() > 0)
    <div class="mb-10">
        <h2 class="text-lg font-bold text-slate-700 mb-4">Filter Kategori</h2>
        <div class="flex flex-wrap gap-3">
            <a href="{{ url('/katalog') }}" class="px-5 py-2 bg-indigo-600 text-white rounded-full text-sm font-bold hover:bg-indigo-700 transition">
                Semua
            </a>
            @foreach($categories as $category)
            <a href="{{ url('/katalog?category=' . $category->slug) }}" 
               class="px-5 py-2 bg-white border-2 border-slate-200 text-slate-700 rounded-full text-sm font-bold hover:border-indigo-600 hover:text-indigo-600 transition">
                {{ $category->name }}
            </a>
            @endforeach
        </div>
    </div>
    @endif

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($events as $event)
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden card-hover transition-all duration-300 hover:shadow-xl">
            <div class="relative">
                <img src="{{ ($event->poster_path && \Storage::disk('public')->exists($event->poster_path))
                    ? asset('storage/' . $event->poster_path)
                    : 'https://placehold.co/400x250/e2e8f0/64748b?text=' . urlencode($event->title) }}"
                     alt="{{ $event->title }}" class="w-full h-48 object-cover">
                @if($event->stock <= 0)
                <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                    <span class="bg-red-500 text-white px-4 py-2 rounded-xl font-bold text-sm">HABIS</span>
                </div>
                @endif
            </div>
            <div class="p-6">
                <div class="mb-3">
                    @if($event->category)
                    <span class="inline-block px-3 py-1 bg-indigo-50 text-indigo-600 rounded-lg text-xs font-bold uppercase tracking-wide">
                        {{ $event->category->name }}
                    </span>
                    @endif
                </div>
                <h3 class="text-xl font-black text-slate-900 mb-2">{{ $event->title }}</h3>
                <p class="text-slate-500 text-sm mb-4">{{ Str::limit($event->description, 80) }}</p>
                <div class="space-y-2 mb-6">
                    <p class="text-slate-600 flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 002 2v12a2 2 0 002 2z"></path></svg>
                        {{ \Carbon\Carbon::parse($event->date)->format('d M Y, H:i') }}
                    </p>
                    <p class="text-slate-600 flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        {{ $event->location }}
                    </p>
                    <p class="text-slate-600 flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Sisa: <strong>{{ $event->stock }}</strong> tiket
                    </p>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                    <div>
                        @if($event->price == 0)
                            <span class="text-lg font-black text-green-600">GRATIS</span>
                        @else
                            <span class="text-lg font-black text-indigo-600">Rp {{ number_format($event->price, 0, ',', '.') }}</span>
                        @endif
                    </div>
                    @if($event->stock > 0)
                        <a href="{{ url('/checkout/' . $event->id) }}" class="px-6 py-2.5 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition text-sm">
                            Beli Tiket
                        </a>
                    @else
                        <button disabled class="px-6 py-2.5 bg-slate-300 text-slate-500 rounded-xl font-bold cursor-not-allowed text-sm">
                            Stok Habis
                        </button>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-16">
            <div class="text-6xl mb-4">📭</div>
            <p class="text-slate-500 text-lg font-medium">Belum ada event tersedia saat ini.</p>
            <p class="text-slate-400 text-sm mt-2">Silakan cek kembali nanti!</p>
        </div>
        @endforelse
    </div>
</div>
@endsection
