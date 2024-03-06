
<?php $__env->startSection('title', 'User'); ?>
<?php $__env->startSection('active-user', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user', [])->html();
} elseif ($_instance->childHasBeenRendered('IVdOBR5')) {
    $componentId = $_instance->getRenderedChildComponentId('IVdOBR5');
    $componentTag = $_instance->getRenderedChildComponentTagName('IVdOBR5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IVdOBR5');
} else {
    $response = \Livewire\Livewire::mount('admin.user', []);
    $html = $response->html();
    $_instance->logRenderedChild('IVdOBR5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:admin.user>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/admin/user/index.blade.php ENDPATH**/ ?>