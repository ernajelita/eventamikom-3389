


<?php $__env->startSection('content'); ?>
<header class="mb-10">
    <h1 class="text-3xl font-black text-slate-800">Edit Event</h1>
    <p class="text-slate-500 font-medium">Perbarui informasi event <span class="text-indigo-600">"<?php echo e($event->title); ?>"</span></p>
</header>


<div class="bg-white rounded-[2.5rem] border border-slate-100 p-10 shadow-sm max-w-4xl">
    <form action="<?php echo e(route('admin.events.update', $event->id)); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
       
        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2">Judul Event</label>
                <input type="text" name="title" value="<?php echo e(old('title', $event->title)); ?>"
                    class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required>
            </div>


            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                <select name="category_id" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e($event->category_id == $category->id ? 'selected' : ''); ?>>
                            <?php echo e($category->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Tanggal & Waktu</label>
                <input type="datetime-local" name="date" value="<?php echo e(old('date', date('Y-m-d\TH:i', strtotime($event->date)))); ?>"
                    class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none" required>
            </div>


            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi</label>
                <textarea name="description" rows="4" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none" required><?php echo e(old('description', $event->description)); ?></textarea>
            </div>


            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Harga (Rp)</label>
                <input type="number" name="price" value="<?php echo e(old('price', $event->price)); ?>" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none" required>
            </div>


            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Stok Tiket</label>
                <input type="number" name="stock" value="<?php echo e(old('stock', $event->stock)); ?>" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none" required>
            </div>


            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2">Lokasi</label>
                <input type="text" name="location" value="<?php echo e(old('location', $event->location)); ?>" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none" required>
            </div>


            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2">Poster Event</label>
                <div class="flex items-start gap-6 p-4 border border-dashed border-slate-200 rounded-2xl bg-slate-50/50">
                    <div class="shrink-0 text-center">
                        <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Poster Saat Ini</p>
                        <img src="<?php echo e(asset('storage/'.$event->poster_path)); ?>" class="w-24 h-32 rounded-xl object-cover shadow-md border-2 border-white">
                    </div>
                    <div class="flex-1">
                        <p class="text-xs text-slate-500 mb-3 leading-relaxed">Pilih file baru jika ingin mengganti poster. Kosongkan jika tidak ingin mengubah gambar.</p>
                        <input type="file" name="poster" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                    </div>
                </div>
            </div>
        </div>


        <div class="flex justify-end gap-4 mt-10 pt-6 border-t border-slate-100">
            <a href="<?php echo e(route('admin.events.index')); ?>" class="px-6 py-3 font-bold text-slate-400 hover:text-slate-600 transition">Batal</a>
            <button type="submit" class="px-10 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transform active:scale-95 transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', ['title' => 'Edit Event'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\eventamikom-3389\resources\views/admin/events/edit.blade.php ENDPATH**/ ?>