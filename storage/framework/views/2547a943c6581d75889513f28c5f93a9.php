<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
        <div class="flex-1 space-y-8">
            <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider">#1
                Event Platform</span>
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                Temukan & Pesan <span class="text-indigo-600">Tiket Event</span> Impianmu.
            </h1>
            <p class="text-lg text-slate-500 max-w-lg leading-relaxed">
                Dari konser musik hingga workshop teknologi, semua ada di genggamanmu. Pesan aman & cepat dengan
                Midtrans.
            </p>
            <div class="flex gap-4">
                <a href="#events"
                    class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-xl shadow-indigo-200 hover:scale-105 transition-transform">
                    Mulai Jelajah
                </a>
                <a href="#"
                    class="px-8 py-4 border-2 border-slate-200 rounded-2xl font-bold text-lg hover:border-indigo-600 hover:text-indigo-600 transition">
                    Cara Pesan
                </a>
            </div>
        </div>
        <div class="flex-1 relative">
            <div
                class="absolute -top-10 -left-10 w-64 h-64 bg-indigo-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute -bottom-10 -right-10 w-64 h-64 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
            </div>
            <img src="assets/concert.png" alt="Concert"
                class="rounded-[2rem] shadow-2xl relative z-10 w-full object-cover aspect-[4/5] object-center">

            <div class="absolute -bottom-6 -left-6 glass p-6 rounded-2xl shadow-xl z-20 border border-white">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-bold uppercase">Terverifikasi</p>
                        <p class="font-bold">Pembayaran Aman via Midtrans</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Grid -->
    <section id="events" class="max-w-7xl mx-auto px-6 py-20">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl font-extrabold mb-2">Event Terdekat</h2>
                <p class="text-slate-500 font-medium">Jangan sampai ketinggalan acara seru minggu ini!</p>
            </div>
            <div class="flex gap-2">
                <button class="p-3 border rounded-xl hover:bg-white hover:shadow-md transition">Semua Kategori</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="relative overflow-hidden aspect-[3/4]">
                    <?php if($event->poster_path): ?>
                    <img src="<?php echo e(asset('storage/' . $event->poster_path)); ?>" alt="<?php echo e($event->title); ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <?php else: ?>
                    <img src="assets/concert.png" alt="<?php echo e($event->title); ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <?php endif; ?>
                    <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                        <?php echo e($event->category->name ?? 'Umum'); ?></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition"><?php echo e($event->title); ?></h3>
                    <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span><?php echo e($event->date->format('d M Y, H:i')); ?></span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t">
                        <span class="text-2xl font-black text-indigo-600">Rp <?php echo e(number_format($event->price, 0, ',', '.')); ?></span>
                        <a href="<?php echo e(url('event-detail/' . $event->id)); ?>"
                            class="px-5 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-span-3 text-center py-20">
                <p class="text-slate-500 text-lg">Belum ada event yang tersedia.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if($categories->count() > 0): ?>
    <section class="max-w-7xl mx-auto px-6 py-12">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold mb-2">Jelajahi Kategori</h2>
            <p class="text-slate-500 font-medium">Temukan event sesuai minatmu</p>
        </div>
        <div class="flex flex-wrap justify-center gap-3">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(url('/katalog?category=' . $category->slug)); ?>" 
               class="px-5 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-semibold hover:bg-indigo-200 transition">
                <?php echo e($category->name); ?>

            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if($partners->count() > 0): ?>
    <section class="max-w-7xl mx-auto px-6 py-20 bg-slate-50">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold mb-2">Partner & Sponsor</h2>
            <p class="text-slate-500 font-medium">Berkolaborasi dengan mitra terpercaya kami</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col items-center justify-center gap-3 hover:shadow-lg transition relative
                <?php if($partner->name === 'AmikomEventHub'): ?> ring-2 ring-indigo-500 bg-indigo-50 <?php endif; ?>">
                <?php if($partner->logo_path): ?>
                <img src="<?php echo e(asset('storage/' . $partner->logo_path)); ?>" alt="<?php echo e($partner->name); ?>"
                    class="max-h-16 object-contain">
                <?php else: ?>
                <span class="text-slate-400 font-bold text-lg"><?php echo e($partner->name); ?></span>
                <?php endif; ?>
                <div class="text-center">
                    <p class="font-bold text-slate-800 text-sm"><?php echo e($partner->name); ?></p>
                    <?php if($partner->type): ?>
                    <span class="inline-block mt-1 px-2 py-0.5 rounded text-xs font-bold <?php echo e($partner->type === 'Technology Partner' ? 'bg-indigo-100 text-indigo-700' : 'bg-slate-100 text-slate-600'); ?>">
                        <?php echo e($partner->type); ?>

                    </span>
                    <?php endif; ?>
                </div>
                <?php if($partner->name === 'AmikomEventHub'): ?>
                <div class="absolute -top-2 -right-2 bg-indigo-600 text-white text-[10px] font-black px-2 py-1 rounded-full shadow-lg">
                    PLATFORM
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\eventamikom-3389\resources\views/welcome.blade.php ENDPATH**/ ?>