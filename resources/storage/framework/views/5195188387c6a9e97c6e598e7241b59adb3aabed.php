
<?php $__env->startSection('title', 'Transaksi'); ?>
<?php $__env->startSection('active-transaksi', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.transaksi', [])->html();
} elseif ($_instance->childHasBeenRendered('fi5iw5e')) {
    $componentId = $_instance->getRenderedChildComponentId('fi5iw5e');
    $componentTag = $_instance->getRenderedChildComponentTagName('fi5iw5e');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fi5iw5e');
} else {
    $response = \Livewire\Livewire::mount('petugas.transaksi', []);
    $html = $response->html();
    $_instance->logRenderedChild('fi5iw5e', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.transaksi>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\THE PUNISHER\Desktop\Badaso\e-perpustakaan\resources\views/petugas/transaksi/index.blade.php ENDPATH**/ ?>