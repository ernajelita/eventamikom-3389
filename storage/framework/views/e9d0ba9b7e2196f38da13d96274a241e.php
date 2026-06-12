


<?php $__env->startSection('content'); ?>
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Kelola Event</h1>
        <p class="text-slate-500 font-medium">Buat dan atur acara seru Anda di sini.</p>
    </div>
    <a href="<?php echo e(route('admin.events.create')); ?>" class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
        + Tambah Event Baru
    </a>
</header>


<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">No</th>
                    <th class="px-8 py-4">Poster</th>
                    <th class="px-8 py-4">Event</th>
                    <th class="px-8 py-4">Harga / Stok</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400"><?php echo e($events->firstItem() + $index); ?></td>
                    <td class="px-8 py-6">
                        <?php if($event->poster_path): ?>
                        <img src="<?php echo e(asset('storage/'.$event->poster_path)); ?>" class="w-16 h-20 rounded-xl object-cover shadow-sm">
                        <?php else: ?>
                        <div class="w-16 h-20 rounded-xl bg-slate-200 flex items-center justify-center">
                            <span class="text-slate-400 text-xs">No Poster</span>
                        </div>
                        <?php endif; ?>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-black text-slate-800"><?php echo e($event->title); ?></p>
                        <p class="text-xs text-slate-400"><?php echo e($event->category->name ?? 'Tanpa Kategori'); ?> • <?php echo e(\Carbon\Carbon::parse($event->date)->format('d M Y')); ?></p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-indigo-600">Rp <?php echo e(number_format($event->price ?? 0, 0, ',', '.')); ?></p>
                        <p class="text-xs text-slate-400">Stok: <?php echo e($event->stock ?? 0); ?></p>
                    </td>
                    <td class="px-8 py-6 flex gap-2">
                        <a href="<?php echo e(route('admin.events.edit', $event->id)); ?>" class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </a>
                        <form action="<?php echo e(route('admin.events.destroy', $event->id)); ?>" method="POST" onsubmit="return confirm('Hapus event ini?')">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="px-8 py-12 text-center">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center text-slate-400">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 002 2v12a2 2 0 002 2z" /></svg>
                            </div>
                            <p class="text-slate-500 font-medium">Belum ada event yang ditambahkan.</p>
                            <a href="<?php echo e(route('admin.events.create')); ?>" class="mt-2 inline-flex items-center gap-1 px-4 py-2 text-sm bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">+ Tambah Event Pertama</a>
                        </div>
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php if($events->hasPages()): ?>
    <div class="px-8 py-6 bg-slate-50/50 border-t">
        <?php echo e($events->links()); ?>

    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', ['title' => 'Kelola Event'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\eventamikom-3389\resources\views/admin/events/index.blade.php ENDPATH**/ ?>