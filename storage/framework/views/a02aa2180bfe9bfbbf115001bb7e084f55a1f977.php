
<?php $__env->startSection('title', 'Buku'); ?>
<?php $__env->startSection('active-buku', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('vVnaRkQ')) {
    $componentId = $_instance->getRenderedChildComponentId('vVnaRkQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('vVnaRkQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vVnaRkQ');
} else {
    $response = \Livewire\Livewire::mount('petugas.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('vVnaRkQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/petugas/buku/index.blade.php ENDPATH**/ ?>