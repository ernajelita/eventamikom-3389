
<?php $__env->startSection('title', 'Tambah Partner - Admin'); ?>

<?php $__env->startSection('page_title', 'Tambah Partner Baru'); ?>
<?php $__env->startSection('page_subtitle', 'Lengkapi formulir di bawah untuk menambahkan partner atau kolaborator.'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-0">
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 px-6 py-4">
            <h2 class="text-white text-xl font-semibold">📋 Formulir Partner</h2>
            <p class="text-indigo-100 text-sm">Isi data partner dengan lengkap</p>
        </div>

        <form method="POST" action="<?php echo e(route('admin.partners.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="p-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    
                    <div class="lg:col-span-1 space-y-5">
                        
                        <div class="bg-gray-50 rounded-xl p-5 text-center border border-dashed border-gray-300 hover:border-indigo-400 transition">
                            <div class="mb-3">
                                <div id="logoPreview" class="w-28 h-28 mx-auto rounded-full bg-gray-200 flex items-center justify-center text-4xl overflow-hidden">
                                    🖼️
                                </div>
                            </div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Logo Partner</label>
                            <input type="file" name="logo" id="logoInput" accept="image/*" class="text-sm w-full file:mr-2 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-sm file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <p class="text-xs text-gray-400 mt-2">JPEG, PNG, GIF. Max 2MB</p>
                            <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
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

                    
                    <div class="lg:col-span-2 space-y-5">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Nama Partner <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Jenis Partner <span class="text-red-500">*</span></label>
                                <select name="type" required class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                                    <option value="">-- Pilih --</option>
                                    <?php $__currentLoopData = ['Game Partner', 'Educational Partner', 'Startup Partner', 'Music Partner', 'Art Partner']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($type); ?>" <?php echo e(old('type') == $type ? 'selected' : ''); ?>><?php echo e($type); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Deskripsi</label>
                            <textarea name="description" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"><?php echo e(old('description')); ?></textarea>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Website</label>
                            <input type="url" name="website" value="<?php echo e(old('website')); ?>" placeholder="https://example.com"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                            <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Email Kontak</label>
                                <input type="email" name="contact_email" value="<?php echo e(old('contact_email')); ?>"
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                                <?php $__errorArgs = ['contact_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Nomor Telepon</label>
                                <input type="text" name="contact_phone" value="<?php echo e(old('contact_phone')); ?>"
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                                <?php $__errorArgs = ['contact_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="bg-gray-50 px-6 py-4 flex justify-end gap-3 border-t">
                <a href="<?php echo e(route('admin.partners.index')); ?>" class="px-6 py-2.5 border border-gray-300 rounded-xl font-semibold text-gray-700 hover:bg-gray-100 transition">Batal</a>
                <button type="submit" class="px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white rounded-xl font-semibold hover:from-indigo-700 hover:to-indigo-800 shadow-md transition active:scale-95">
                    💾 Simpan Partner
                </button>
            </div>
        </form>
    </div>
</div>


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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\eventamikom-3389\resources\views/admin/partners/create.blade.php ENDPATH**/ ?>