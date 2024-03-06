

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.keranjang', [])->html();
} elseif ($_instance->childHasBeenRendered('Z3kMle1')) {
    $componentId = $_instance->getRenderedChildComponentId('Z3kMle1');
    $componentTag = $_instance->getRenderedChildComponentTagName('Z3kMle1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Z3kMle1');
} else {
    $response = \Livewire\Livewire::mount('peminjam.keranjang', []);
    $html = $response->html();
    $_instance->logRenderedChild('Z3kMle1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.keranjang>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/peminjam/keranjang/index.blade.php ENDPATH**/ ?>