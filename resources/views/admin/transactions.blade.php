@extends('layouts.admin')
@section('title', 'Laporan Transaksi - Admin')
@section('content')
<main class="flex-1 p-10 overflow-y-auto">
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Laporan Transaksi</h1>
            <p class="text-slate-500 font-medium">Pantau arus kas dan penjualan tiket Anda.</p>
        </div>
        <div class="flex gap-4">
            <button class="px-6 py-3 border-2 border-slate-200 rounded-2xl font-bold hover:bg-white hover:border-indigo-600 hover:text-indigo-600 transition">
                Ekspor Excel
            </button>
            <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
                Unduh PDF
            </button>
        </div>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="px-8 py-6 bg-slate-50/50 border-b flex flex-wrap gap-4 items-center">
            <form method="GET" class="flex-1 min-w-[300px] flex gap-2">
                <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari Order ID, Nama, atau Email..."
                    class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition uppercase text-sm font-medium tracking-wide">
            </form>
            <div class="flex gap-2">
                <select class="px-5 py-3 rounded-xl border-slate-200 border bg-white outline-none text-sm font-bold">
                    <option>Semua Status</option>
                    <option class="text-green-600">Success</option>
                    <option class="text-orange-600">Pending</option>
                    <option class="text-rose-600">Expired</option>
                </select>
                <select class="px-5 py-3 rounded-xl border-slate-200 border bg-white outline-none text-sm font-bold">
                    <option>Bulan Ini</option>
                    <option>Bulan Lalu</option>
                    <option>Tahun 2024</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-8 py-4">Order ID</th>
                        <th class="px-8 py-4">Detail Pembeli</th>
                        <th class="px-8 py-4">Event</th>
                        <th class="px-8 py-4">Tgl Transaksi</th>
                        <th class="px-8 py-4">Status</th>
                        <th class="px-8 py-4 text-right">Total Tagihan</th>
                        <th class="px-8 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y border-t">
                    @forelse($transactions as $trx)
                    <tr class="hover:bg-slate-50/50 transition {{ $trx->status == 'pending' ? 'text-slate-400' : '' }}">
                        <td class="px-8 py-6">
                            <span class="font-mono font-bold px-3 py-1 rounded-lg text-sm {{ $trx->status == 'pending' ? 'bg-slate-100' : 'text-indigo-600 bg-indigo-50' }}">
                                {{ $trx->order_id }}
                            </span>
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-bold text-slate-800">{{ $trx->customer_name }}</p>
                            <p class="text-xs text-slate-500">{{ $trx->customer_email }}<br>{{ $trx->customer_phone }}</p>
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-medium text-slate-700">{{ $trx->event->title ?? '-' }}</p>
                        </td>
                        <td class="px-8 py-6 text-sm text-slate-500">
                            {{ $trx->created_at->format('d M Y, H:i') }}
                        </td>
                        <td class="px-8 py-6">
                            @php
                                $status = strtolower($trx->status);
                            @endphp
                            @if(in_array($status, ['settlement', 'success']))
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase ring-1 ring-green-200">Success</span>
                            @elseif($status === 'pending')
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-lg text-xs font-bold uppercase ring-1 ring-orange-200">Pending</span>
                            @elseif($status === 'failed' || $status === 'expired')
                                <span class="px-3 py-1 bg-rose-100 text-rose-700 rounded-lg text-xs font-bold uppercase ring-1 ring-rose-200">{{ ucfirst($trx->status) }}</span>
                            @else
                                <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold uppercase ring-1 ring-slate-200">{{ ucfirst($trx->status) }}</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right font-black {{ $trx->status == 'pending' ? '' : 'text-slate-900' }}">
                            Rp {{ number_format($trx->total_price, 0, ',', '.') }}
                        </td>
                        <td class="px-8 py-6 text-center">
                            <form action="{{ route('admin.transactions.destroy', $trx->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus transaksi ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-8 py-10 text-center text-slate-500">Belum ada transaksi</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-8 py-6 bg-slate-50/50 border-t flex justify-between items-center">
            <p class="text-sm text-slate-500 font-medium">
                Menampilkan {{ $transactions->firstItem() ?? 0 }} - {{ $transactions->lastItem() ?? 0 }} dari {{ $transactions->total() }} transaksi
            </p>
            <div class="flex gap-2">
                @if($transactions->onFirstPage())
                    <button class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold opacity-50 cursor-not-allowed" disabled>Previous</button>
                @else
                    <a href="{{ $transactions->previousPageUrl() }}" class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold">Previous</a>
                @endif

                @foreach($transactions->getUrlRange(1, $transactions->lastPage()) as $page => $url)
                    @if($page == $transactions->currentPage())
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-xl shadow-md text-sm font-bold">{{ $page }}</button>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold">{{ $page }}</a>
                    @endif
                @endforeach

                @if($transactions->hasMorePages())
                    <a href="{{ $transactions->nextPageUrl() }}" class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold">Next</a>
                @else
                    <button class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold opacity-50 cursor-not-allowed" disabled>Next</button>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection
