

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.keranjang', [])->html();
} elseif ($_instance->childHasBeenRendered('nOxfDyT')) {
    $componentId = $_instance->getRenderedChildComponentId('nOxfDyT');
    $componentTag = $_instance->getRenderedChildComponentTagName('nOxfDyT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nOxfDyT');
} else {
    $response = \Livewire\Livewire::mount('peminjam.keranjang', []);
    $html = $response->html();
    $_instance->logRenderedChild('nOxfDyT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.keranjang>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/peminjam/keranjang/index.blade.php ENDPATH**/ ?>