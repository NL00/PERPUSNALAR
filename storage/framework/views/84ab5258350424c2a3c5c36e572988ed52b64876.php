
<?php $__env->startSection('title', 'Rak'); ?>
<?php $__env->startSection('active-rak', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.rak', [])->html();
} elseif ($_instance->childHasBeenRendered('2DH8byf')) {
    $componentId = $_instance->getRenderedChildComponentId('2DH8byf');
    $componentTag = $_instance->getRenderedChildComponentTagName('2DH8byf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2DH8byf');
} else {
    $response = \Livewire\Livewire::mount('petugas.rak', []);
    $html = $response->html();
    $_instance->logRenderedChild('2DH8byf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.rak>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\THE PUNISHER\Desktop\Badaso\e-perpustakaan\resources\views/petugas/rak/index.blade.php ENDPATH**/ ?>