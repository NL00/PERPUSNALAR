
<?php $__env->startSection('title', 'Transaksi'); ?>
<?php $__env->startSection('active-transaksi', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.transaksi', [])->html();
} elseif ($_instance->childHasBeenRendered('o7ZBoLA')) {
    $componentId = $_instance->getRenderedChildComponentId('o7ZBoLA');
    $componentTag = $_instance->getRenderedChildComponentTagName('o7ZBoLA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('o7ZBoLA');
} else {
    $response = \Livewire\Livewire::mount('petugas.transaksi', []);
    $html = $response->html();
    $_instance->logRenderedChild('o7ZBoLA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.transaksi>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/petugas/transaksi/index.blade.php ENDPATH**/ ?>