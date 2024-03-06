
<?php $__env->startSection('title', 'Transaksi'); ?>
<?php $__env->startSection('active-transaksi', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.transaksi', [])->html();
} elseif ($_instance->childHasBeenRendered('La7D7VT')) {
    $componentId = $_instance->getRenderedChildComponentId('La7D7VT');
    $componentTag = $_instance->getRenderedChildComponentTagName('La7D7VT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('La7D7VT');
} else {
    $response = \Livewire\Livewire::mount('petugas.transaksi', []);
    $html = $response->html();
    $_instance->logRenderedChild('La7D7VT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.transaksi>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/petugas/transaksi/index.blade.php ENDPATH**/ ?>