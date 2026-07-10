<?php $__env->startSection('title', 'Pembayaran Berhasil'); ?>
<?php $__env->startSection('content'); ?>
<main class="max-w-3xl mx-auto px-6 py-20 text-center">
    <div class="bg-white rounded-3xl border border-slate-200 p-12 shadow-sm inline-block w-full max-w-md">
        <div class="w-24 h-24 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <h2 class="text-3xl font-black mb-4">Terima Kasih!</h2>
        <p class="text-slate-500 mb-8 leading-relaxed">
            Pembayaran untuk pesanan <strong><?php echo e($transaction->order_id); ?></strong> sedang diproses atau telah berhasil. 
            E-Ticket akan dikirim ke email Anda (<strong><?php echo e($transaction->customer_email); ?></strong>) setelah pembayaran terkonfirmasi lunas.
        </p>
        <a href="<?php echo e(route('home')); ?>" class="inline-block px-8 py-4 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">
            Kembali ke Beranda
        </a>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\eventamikom-3389\resources\views/checkout/success.blade.php ENDPATH**/ ?>