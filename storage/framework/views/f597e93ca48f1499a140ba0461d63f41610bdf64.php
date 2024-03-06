<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input wire:model="search" type="search" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <!-- /.card-header -->
            
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th width="10%">No</th>
                    <th>Kode Pinjam</th>
                    <th>Buku</th>
                    <th>Lokasi</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Denda</th>
                    <th>Status</th>
                  
                       
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->kode_pinjam); ?></td>
                        <td>
                            <ul>
                                <?php $__currentLoopData = $item->detail_peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail_peminjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($detail_peminjaman->buku->judul ?? ''); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                       <td>
                            <ul>
                                <?php $__currentLoopData = $item->detail_peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail_peminjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($detail_peminjaman->buku->rak->lokasi ?? ''); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                        <td><?php echo e($item->tanggal_pinjam); ?></td>
                        <td><?php echo e($item->tanggal_kembali); ?></td>
                        <td><?php echo e($item->denda); ?></td>
                        <td>
                            <?php if($item->status == 1): ?>
                                <span class="badge bg-indigo">Belum Dipinjam</span>
                            <?php elseif($item->status == 2): ?>
                                <span class="badge bg-olive">Sedang Dipinjam</span>
                            <?php else: ?>
                                <span class="badge bg-fuchsia">Selesai Dipinjam</span>
                            <?php endif; ?>
                        </td>
                       
                            <td>
                                <?php if($item->status == 1): ?>
                                    <span wire:click="pinjam(<?php echo e($item->id); ?>)" class="btn btn-sm btn-success mr-2">Pinjam</span>
                                <?php elseif($item->status == 2): ?>
                                    <span wire:click="kembali(<?php echo e($item->id); ?>)" class="btn btn-sm btn-primary mr-2">Kembali</span>
                                <?php endif; ?>
                            </td>
                       
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

     <div class="row justify-content-center">
        <?php echo e($transaksi->links()); ?>

    </div>

    <?php if($transaksi->isEmpty()): ?>
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
<!-- /.row --><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/livewire/petugas/laporan.blade.php ENDPATH**/ ?>