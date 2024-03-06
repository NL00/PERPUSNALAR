
<?php $__env->startSection('title', 'User'); ?>
<?php $__env->startSection('active-user', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user', [])->html();
} elseif ($_instance->childHasBeenRendered('uHds5bd')) {
    $componentId = $_instance->getRenderedChildComponentId('uHds5bd');
    $componentTag = $_instance->getRenderedChildComponentTagName('uHds5bd');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uHds5bd');
} else {
    $response = \Livewire\Livewire::mount('admin.user', []);
    $html = $response->html();
    $_instance->logRenderedChild('uHds5bd', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:admin.user>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/admin/user/index.blade.php ENDPATH**/ ?>