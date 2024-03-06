
<?php $__env->startSection('title', 'Penerbit'); ?>
<?php $__env->startSection('active-penerbit', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.penerbit', [])->html();
} elseif ($_instance->childHasBeenRendered('bI0GinF')) {
    $componentId = $_instance->getRenderedChildComponentId('bI0GinF');
    $componentTag = $_instance->getRenderedChildComponentTagName('bI0GinF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bI0GinF');
} else {
    $response = \Livewire\Livewire::mount('petugas.penerbit', []);
    $html = $response->html();
    $_instance->logRenderedChild('bI0GinF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.penerbit>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/petugas/penerbit/index.blade.php ENDPATH**/ ?>