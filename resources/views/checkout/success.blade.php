@extends('layouts.app')
@section('title', 'Checkout Berhasil')

@section('content')
<main class="max-w-3xl mx-auto px-6 py-20">
    <div class="bg-white rounded-3xl border border-slate-200 p-10 shadow-sm text-center">
        <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <h1 class="text-3xl font-black mb-4 text-slate-900">Pesanan Berhasil!</h1>
        <p class="text-slate-500 mb-8">Terima kasih, <strong>{{ $transaction->customer_name }}</strong>.<br>E-Ticket akan dikirim ke {{ $transaction->customer_email }}.</p>

        <div class="bg-slate-50 rounded-2xl p-6 mb-8">
            <p class="text-sm text-slate-500">Order ID</p>
            <p class="font-mono font-bold text-indigo-600 text-lg">{{ $transaction->order_id }}</p>
            <p class="text-sm text-slate-500 mt-4">Total Bayar</p>
            <p class="font-black text-2xl text-slate-900">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</p>
            <p class="text-sm text-slate-500 mt-2">Status</p>
            <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold uppercase">Pending</span>
        </div>

        <a href="{{ route('home') }}" class="inline-block px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
            Kembali ke Beranda
        </a>
    </div>
</main>
@endsection
