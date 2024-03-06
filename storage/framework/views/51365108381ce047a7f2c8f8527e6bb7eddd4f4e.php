

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('YHRlaBL')) {
    $componentId = $_instance->getRenderedChildComponentId('YHRlaBL');
    $componentTag = $_instance->getRenderedChildComponentTagName('YHRlaBL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YHRlaBL');
} else {
    $response = \Livewire\Livewire::mount('peminjam.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('YHRlaBL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\pppp\resources\views/peminjam/buku/index.blade.php ENDPATH**/ ?>