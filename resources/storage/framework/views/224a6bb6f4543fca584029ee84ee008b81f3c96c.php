
<?php $__env->startSection('title', 'Buku'); ?>
<?php $__env->startSection('active-buku', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('Y406NZ9')) {
    $componentId = $_instance->getRenderedChildComponentId('Y406NZ9');
    $componentTag = $_instance->getRenderedChildComponentTagName('Y406NZ9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Y406NZ9');
} else {
    $response = \Livewire\Livewire::mount('petugas.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('Y406NZ9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/petugas/buku/index.blade.php ENDPATH**/ ?>