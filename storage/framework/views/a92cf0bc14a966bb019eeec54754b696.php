
<?php $__env->startSection('title', 'Edit Kategori - Admin'); ?>

<?php $__env->startSection('page_title', 'Edit Kategori'); ?>
<?php $__env->startSection('page_subtitle', 'Perbarui informasi kategori'); ?>
<?php $__env->startSection('content'); ?>
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <form action="<?php echo e(route('admin.categories.update', $category->id)); ?>" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            
            <div class="mb-6">
                <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">
                    Nama Kategori <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400 pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 01.586 1.414V19a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z" />
                        </svg>
                    </span>
                    <input type="text" name="name" id="name" value="<?php echo e(old('name', $category->name)); ?>"
                           class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 outline-none transition <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 ring-red-100 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Contoh: Teknologi & IT, Entertainment, Olahraga"
                           autocomplete="off">
                </div>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="mb-6">
                <label for="slug" class="block text-sm font-semibold text-slate-700 mb-2">
                    Slug URL <span class="text-slate-400 text-xs font-normal">(untuk URL, boleh diubah)</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400 pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.102m1.858-3.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </span>
                    <input type="text" name="slug" id="slug" value="<?php echo e(old('slug', $category->slug)); ?>"
                           class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 outline-none transition font-mono text-sm <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 ring-red-100 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="teknologi-it">
                </div>
                <p class="text-xs text-slate-400 mt-1 flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                    Slug akan digunakan untuk URL kategori. Dihasilkan otomatis dari nama, tetapi Anda bisa mengubahnya secara manual.
                </p>
                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="mb-6">
                <label for="image" class="block text-sm font-semibold text-slate-700 mb-2">
                    Gambar Kategori <span class="text-slate-400 text-xs font-normal">(Opsional)</span>
                </label>

                <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                    <div class="flex-1 w-full">
                        <input type="file" name="image" id="image" accept="image/*"
                               class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 outline-none transition file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="flex gap-3 items-center flex-shrink-0">
                        <?php if($category->image): ?>
                        <div id="currentImagePreview" class="w-16 h-16 rounded-xl overflow-hidden border border-slate-200 bg-slate-50 shadow-sm">
                            <img src="<?php echo e(asset('storage/' . $category->image)); ?>" class="w-full h-full object-cover" alt="Current image">
                        </div>
                        <?php endif; ?>
                        <div id="newImagePreview" class="hidden w-16 h-16 rounded-xl overflow-hidden border border-indigo-200 bg-indigo-50 shadow-sm">
                            <img id="previewImg" class="w-full h-full object-cover" src="#" alt="Preview">
                        </div>
                    </div>
                </div>

                <div class="mt-2 flex flex-wrap items-center gap-x-4 gap-y-1 text-xs">
                    <?php if($category->image): ?>
                    <span class="text-slate-500 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        <a href="<?php echo e(asset('storage/' . $category->image)); ?>" target="_blank" class="text-indigo-600 hover:underline">Lihat gambar asli</a>
                    </span>
                    <?php endif; ?>
                    <span class="text-slate-400 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        Format: JPG, PNG, GIF. Maks 2MB. Kosongkan jika tidak ingin mengubah.
                    </span>
                </div>
            </div>

            
            <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-slate-100">
                <a href="<?php echo e(route('admin.categories')); ?>" class="inline-flex justify-center items-center gap-2 px-6 py-2.5 border border-slate-200 text-slate-600 rounded-xl font-semibold hover:bg-slate-50 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    Batal
                </a>
                <button type="submit" class="inline-flex justify-center items-center gap-2 px-6 py-2.5 bg-indigo-600 text-white rounded-xl font-semibold shadow-sm hover:bg-indigo-700 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    Perbarui Kategori
                </button>
            </div>
        </form>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
    // Generate slug dari teks (huruf kecil, strip, tanpa karakter khusus)
    function generateSlug(text) {
        return text
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .replace(/^-|-$/g, '');
    }

    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');

    // Saat nama berubah, update slug secara otomatis
    nameInput.addEventListener('input', function() {
        const newSlug = generateSlug(this.value);
        slugInput.value = newSlug;
    });

    // Preview gambar baru di samping saat memilih file
    const imageInput = document.getElementById('image');
    const newPreviewContainer = document.getElementById('newImagePreview');
    const previewImg = document.getElementById('previewImg');
    const currentPreviewContainer = document.getElementById('currentImagePreview');

    imageInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                newPreviewContainer.classList.remove('hidden');
                if (currentPreviewContainer) {
                    currentPreviewContainer.classList.add('hidden');
                }
            };
            reader.readAsDataURL(file);
        } else {
            newPreviewContainer.classList.add('hidden');
            if (currentPreviewContainer) {
                currentPreviewContainer.classList.remove('hidden');
            }
            previewImg.src = '#';
        }
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\eventamikom-3389\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>