
<?php $__env->startSection('title', 'Rak'); ?>
<?php $__env->startSection('active-rak', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.rak', [])->html();
} elseif ($_instance->childHasBeenRendered('AuCW7sk')) {
    $componentId = $_instance->getRenderedChildComponentId('AuCW7sk');
    $componentTag = $_instance->getRenderedChildComponentTagName('AuCW7sk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AuCW7sk');
} else {
    $response = \Livewire\Livewire::mount('petugas.rak', []);
    $html = $response->html();
    $_instance->logRenderedChild('AuCW7sk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.rak>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aya\Desktop\UJIKOM NALAR\perpus-ujikom\resources\views/petugas/rak/index.blade.php ENDPATH**/ ?>