

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('HNEBtbV')) {
    $componentId = $_instance->getRenderedChildComponentId('HNEBtbV');
    $componentTag = $_instance->getRenderedChildComponentTagName('HNEBtbV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HNEBtbV');
} else {
    $response = \Livewire\Livewire::mount('peminjam.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('HNEBtbV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/peminjam/buku/index.blade.php ENDPATH**/ ?>