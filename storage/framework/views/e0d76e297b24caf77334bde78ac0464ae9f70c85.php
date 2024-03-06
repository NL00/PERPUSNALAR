

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('sbPLBdi')) {
    $componentId = $_instance->getRenderedChildComponentId('sbPLBdi');
    $componentTag = $_instance->getRenderedChildComponentTagName('sbPLBdi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sbPLBdi');
} else {
    $response = \Livewire\Livewire::mount('peminjam.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('sbPLBdi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\THE PUNISHER\Desktop\Badaso\e-perpustakaan\resources\views/peminjam/buku/index.blade.php ENDPATH**/ ?>