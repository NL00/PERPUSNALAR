
<?php $__env->startSection('title', 'Buku'); ?>
<?php $__env->startSection('active-buku', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('Kpf6MsW')) {
    $componentId = $_instance->getRenderedChildComponentId('Kpf6MsW');
    $componentTag = $_instance->getRenderedChildComponentTagName('Kpf6MsW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Kpf6MsW');
} else {
    $response = \Livewire\Livewire::mount('petugas.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('Kpf6MsW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\THE PUNISHER\Desktop\Badaso\e-perpustakaan\resources\views/petugas/buku/index.blade.php ENDPATH**/ ?>