
<?php $__env->startSection('title', 'Kategori'); ?>
<?php $__env->startSection('active-kategori', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.kategori', [])->html();
} elseif ($_instance->childHasBeenRendered('jU3bHo5')) {
    $componentId = $_instance->getRenderedChildComponentId('jU3bHo5');
    $componentTag = $_instance->getRenderedChildComponentTagName('jU3bHo5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jU3bHo5');
} else {
    $response = \Livewire\Livewire::mount('petugas.kategori', []);
    $html = $response->html();
    $_instance->logRenderedChild('jU3bHo5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.kategori>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/petugas/kategori/index.blade.php ENDPATH**/ ?>