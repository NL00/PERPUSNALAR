 <?php if($edit): ?>
 <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Edit Buku</h4>
                 <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </span>
             </div>
             <div class="modal-body">
                 <div class="form-group">
                     <label for="judul">Judul</label>
                     <input wire:model="judul" type="text" class="form-control" id="judul">
                     <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </div>
                 <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="penulis">Penulis</label>
                             <input wire:model="penulis" type="text" class="form-control" id="penulis">
                             <?php $__errorArgs = ['penulis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="stok">Stok</label>
                             <input wire:model="stok" type="number" class="form-control" id="stok" min="1">
                             <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                         </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="sampul">Sampul</label>
                     <input wire:model="sampul" type="file" class="form-control" id="sampul" min="1">
                     <?php $__errorArgs = ['sampul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </div>
                 <div class="row">
                     <div class="col-md-4">
                         <div class="form-group">
                             <label for="kategori">Kategori</label>
                             <select wire:model="kategori_id" wire:click="pilihKategori" class="form-control" id="kategori">
                                 <option selected value="">Pilih Kategori</option>
                                 <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($item->id != 1): ?>
                                 <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                                 <?php endif; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                             <?php $__errorArgs = ['kategori_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="form-group">
                             <label for="penerbit">Penerbit</label>
                             <select wire:model="penerbit_id" class="form-control" id="penerbit">
                                 <option selected value="">Pilih Penerbit</option>
                                 <?php $__currentLoopData = $penerbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                             <?php $__errorArgs = ['penerbit_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="form-group">
                             <label for="rak">Rak</label>
                             <select wire:model="rak_id" class="form-control" id="rak">
                                 <option selected value="">Pilih Rak</option>
                                 <?php $__currentLoopData = $rak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($item->id); ?>">Rak : <?php echo e($item->rak); ?>, Baris : <?php echo e($item->baris); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                             <?php $__errorArgs = ['rak_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="modal-footer justify-content-between">
                 <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                 <span type="button" wire:click="update(<?php echo e($buku_id); ?>)" class="btn btn-success">Update</span>
             </div>
         </div>
     </div>
 </div>
 <?php endif; ?><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/petugas/buku/edit.blade.php ENDPATH**/ ?>