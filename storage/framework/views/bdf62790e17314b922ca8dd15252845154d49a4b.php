 <?php if($show): ?>
 <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Lihat Buku</h4>
                 <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </span>
             </div>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-md-5">
                         <div class="row justify-content-center">
                             <img src="/storage/<?php echo e($sampul); ?>" alt="<?php echo e($judul); ?>" width="250" height="350">
                         </div>
                     </div>
                     <div class="col-md-7">
                         <table class="table text-nowrap">
                             <tbody>
                                 <tr>
                                     <th>Judul</th>
                                     <td>:</td>
                                     <td><?php echo e($judul); ?></td>
                                 </tr>
                                 <tr>
                                     <th>Penulis</th>
                                     <td>:</td>
                                     <td><?php echo e($penulis); ?></td>
                                 </tr>
                                 <tr>
                                     <th>Penerbit</th>
                                     <td>:</td>
                                     <td><?php echo e($penerbit); ?></td>
                                 </tr>
                                 <tr>
                                     <th>Kategori</th>
                                     <td>:</td>
                                     <td><?php echo e($kategori); ?></td>
                                 </tr>
                                 <tr>
                                     <th>Rak</th>
                                     <td>:</td>
                                     <td><?php echo e($rak == 0 ? 'none' : $rak); ?></td>
                                 </tr>
                                 <tr>
                                     <th>Baris</th>
                                     <td>:</td>
                                     <td><?php echo e($baris == 0 ? 'none' : $baris); ?></td>
                                 </tr>
                                 <tr>
                                     <th>Stok</th>
                                     <td>:</td>
                                     <td><?php echo e($stok); ?></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <div class="modal-footer justify-content-between">
                 <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Kembali</span>
             </div>
         </div>
     </div>
 </div>
 <?php endif; ?><?php /**PATH C:\Users\THE PUNISHER\Desktop\Badaso\e-perpustakaan\resources\views/petugas/buku/show.blade.php ENDPATH**/ ?>