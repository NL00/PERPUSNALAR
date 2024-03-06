
<?php $__env->startSection('title', 'Penerbit'); ?>
<?php $__env->startSection('active-penerbit', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.penerbit', [])->html();
} elseif ($_instance->childHasBeenRendered('7nx4HtQ')) {
    $componentId = $_instance->getRenderedChildComponentId('7nx4HtQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('7nx4HtQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7nx4HtQ');
} else {
    $response = \Livewire\Livewire::mount('petugas.penerbit', []);
    $html = $response->html();
    $_instance->logRenderedChild('7nx4HtQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.penerbit>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/petugas/penerbit/index.blade.php ENDPATH**/ ?>