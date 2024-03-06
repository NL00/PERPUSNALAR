

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('AYfUlKC')) {
    $componentId = $_instance->getRenderedChildComponentId('AYfUlKC');
    $componentTag = $_instance->getRenderedChildComponentTagName('AYfUlKC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AYfUlKC');
} else {
    $response = \Livewire\Livewire::mount('peminjam.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('AYfUlKC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/peminjam/buku/index.blade.php ENDPATH**/ ?>