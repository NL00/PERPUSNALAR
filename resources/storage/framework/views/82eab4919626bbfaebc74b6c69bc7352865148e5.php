
<?php $__env->startSection('title', 'Rak'); ?>
<?php $__env->startSection('active-rak', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.rak', [])->html();
} elseif ($_instance->childHasBeenRendered('xw5zrOl')) {
    $componentId = $_instance->getRenderedChildComponentId('xw5zrOl');
    $componentTag = $_instance->getRenderedChildComponentTagName('xw5zrOl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xw5zrOl');
} else {
    $response = \Livewire\Livewire::mount('petugas.rak', []);
    $html = $response->html();
    $_instance->logRenderedChild('xw5zrOl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.rak>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/petugas/rak/index.blade.php ENDPATH**/ ?>