
<?php $__env->startSection('title', 'Kelola Partner - Admin'); ?>
<?php $__env->startSection('page_title', 'Kelola Partner'); ?>
<?php $__env->startSection('page_subtitle', 'Kelola data partner dan kolaborator di sini.'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <form method="GET" action="<?php echo e(route('admin.partners.index')); ?>" class="flex flex-1 max-w-md gap-2">
            <div class="relative flex-1">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>
                <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Cari partner (nama, email, kontak)..."
                    class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 outline-none transition">
            </div>
            <button type="submit" class="px-5 py-2.5 bg-indigo-600 text-white rounded-xl font-semibold hover:bg-indigo-700 transition shadow-sm">Cari</button>
            <?php if(request('search')): ?>
            <a href="<?php echo e(route('admin.partners.index')); ?>" class="px-5 py-2.5 bg-white border border-slate-200 text-slate-700 rounded-xl font-semibold hover:bg-slate-50 transition">Reset</a>
            <?php endif; ?>
        </form>
        <a href="<?php echo e(route('admin.partners.create')); ?>" class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 text-white rounded-xl font-semibold shadow-md hover:bg-indigo-700 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            Tambah Partner
        </a>
    </div>

    
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-100">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Logo</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Partner</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Kontak</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-right text-xs font-semibold text-slate-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    <?php $__empty_1 = true; $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-slate-50/80 transition">
                        <td class="px-6 py-5 whitespace-nowrap text-sm text-slate-600">
                            <?php echo e(($partners->currentPage()-1)*$partners->perPage() + $loop->iteration); ?>

                        </td>
                        <td class="px-6 py-5 whitespace-nowrap">
                            <?php if($p->logo_path): ?>
                                <img src="<?php echo e(asset('storage/'.$p->logo_path)); ?>" class="w-12 h-12 rounded-xl object-cover shadow-sm border border-slate-100">
                            <?php else: ?>
                                <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z" /><path d="M17 21v-4H7v4" /><path d="M12 7v6" /><path d="M9 10h6" /></svg>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex flex-col">
                                <span class="font-bold text-slate-800"><?php echo e($p->name); ?></span>
                                <div class="flex items-center gap-2 mt-1 flex-wrap">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700">
                                        <?php echo e($p->type ?? 'Umum'); ?>

                                    </span>
                                    <?php if($p->website): ?>
                                    <a href="<?php echo e($p->website); ?>" target="_blank" rel="noopener" class="text-xs text-indigo-500 hover:text-indigo-700 inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                        <?php echo e(parse_url($p->website, PHP_URL_HOST)); ?>

                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5">
                            <div class="text-sm space-y-1">
                                <?php if($p->contact_email): ?>
                                <div class="flex items-center gap-1 text-slate-600">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                    <span><?php echo e($p->contact_email); ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($p->contact_phone): ?>
                                <div class="flex items-center gap-1 text-slate-600">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                    <span><?php echo e($p->contact_phone); ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if(!$p->contact_email && !$p->contact_phone): ?>
                                <span class="text-slate-400 text-xs">—</span>
                                <?php endif; ?>
                            </div>
                        </td>
                        <td class="px-6 py-5 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold <?php echo e($p->is_active ? 'bg-emerald-50 text-emerald-700 ring-1 ring-emerald-200' : 'bg-slate-100 text-slate-600 ring-1 ring-slate-200'); ?>">
                                <?php echo e($p->is_active ? 'Aktif' : 'Tidak Aktif'); ?>

                            </span>
                        </td>
                        <td class="px-6 py-5 whitespace-nowrap text-right">
                            <div class="flex justify-end gap-2">
                                <a href="<?php echo e(route('admin.partners.edit', $p)); ?>" class="p-2 rounded-xl text-indigo-600 hover:bg-indigo-50 transition" title="Edit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                </a>
                                <form action="<?php echo e(route('admin.partners.destroy', $p)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus partner ini? Data akan hilang permanen.');">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="p-2 rounded-xl text-rose-600 hover:bg-rose-50 transition" title="Hapus">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center text-slate-400">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                </div>
                                <p class="text-slate-500 font-medium">Belum ada partner tersedia</p>
                                <a href="<?php echo e(route('admin.partners.create')); ?>" class="mt-2 inline-flex items-center gap-1 px-4 py-2 text-sm bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">+ Tambah Partner Pertama</a>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        
        <?php if($partners->hasPages()): ?>
        <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/30">
            <?php echo e($partners->appends(['search' => request('search')])->links()); ?>

        </div>
        <?php endif; ?>
    </div>
</div>


<?php $__env->startPush('styles'); ?>
<style>
    /* Make default pagination (usually from Laravel) more modern */
    .pagination {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.25rem;
    }
    .pagination .page-item .page-link {
        padding: 0.5rem 0.875rem;
        border-radius: 0.75rem;
        color: #1f2937;
        background-color: white;
        border: 1px solid #e2e8f0;
        font-weight: 500;
        transition: all 0.2s;
    }
    .pagination .page-item.active .page-link {
        background-color: #4f46e5;
        border-color: #4f46e5;
        color: white;
    }
    .pagination .page-item.disabled .page-link {
        background-color: #f8fafc;
        color: #94a3b8;
    }
    .pagination .page-item:not(.active):not(.disabled) .page-link:hover {
        background-color: #f1f5f9;
        border-color: #cbd5e1;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\eventamikom-3389\resources\views/admin/partners/index.blade.php ENDPATH**/ ?>