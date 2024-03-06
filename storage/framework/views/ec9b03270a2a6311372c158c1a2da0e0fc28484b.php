<div class="row">
    <div class="col-12">

    <?php echo $__env->make('admin-lte/flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('petugas/buku/create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('petugas/buku/edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('petugas/buku/delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('petugas/buku/show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card">
        <div class="card-header">
        <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>

             <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input wire:model="search" type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <!-- /.card-header -->
            <?php if($buku->isNotEmpty()): ?>
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th width="10%">No</th>
                    <th>Sampul</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th width="15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><img src="/storage/<?php echo e($item->sampul); ?>" alt="<?php echo e($item->judul); ?>" width="60" height="80"></td>
                        <td><?php echo e($item->judul); ?></td>
                        <td><?php echo e($item->penulis); ?></td>
                        <td><?php echo e($item->kategori->nama); ?></td>
                        <td>
                            <div class="btn-group">
                                <span wire:click="show(<?php echo e($item->id); ?>)" class="btn btn-sm btn-success mr-2">Lihat</span>
                                <span wire:click="edit(<?php echo e($item->id); ?>)" class="btn btn-sm btn-primary mr-2">Edit</span>
                                <span wire:click="delete(<?php echo e($item ->id); ?>)" class="btn btn-sm btn-danger">Hapus</span>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
         <?php endif; ?>
    </div>
    <!-- /.card -->

    <div class="row justify-content-center">
        <?php echo e($buku->links()); ?>

    </div>

    <?php if($buku->isEmpty()): ?>
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning">
                    Anda tidak memiliki data
                </div>
            </div>
        </div>
    <?php endif; ?>

    </div>
</div>
<!-- /.row --><?php /**PATH C:\Users\THE PUNISHER\Desktop\Badaso\e-perpustakaan\resources\views/livewire/petugas/buku.blade.php ENDPATH**/ ?>