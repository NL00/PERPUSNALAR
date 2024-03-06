
<?php $__env->startSection('title', 'User'); ?>
<?php $__env->startSection('active-user', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user', [])->html();
} elseif ($_instance->childHasBeenRendered('iEdBBNM')) {
    $componentId = $_instance->getRenderedChildComponentId('iEdBBNM');
    $componentTag = $_instance->getRenderedChildComponentTagName('iEdBBNM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iEdBBNM');
} else {
    $response = \Livewire\Livewire::mount('admin.user', []);
    $html = $response->html();
    $_instance->logRenderedChild('iEdBBNM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:admin.user>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\THE PUNISHER\Desktop\Badaso\e-perpustakaan\resources\views/admin/user/index.blade.php ENDPATH**/ ?>