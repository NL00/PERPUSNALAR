<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            Perpustakaan
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

       

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                <?php if(Route::has('login')): ?>
                <li class="nav-item">
                    <a class="nav-link bg-success " href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php endif; ?>
                <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link bg-info " href="<?php echo e(route('register')); ?>"><?php echo e(__('register')); ?></a>
                </li>
                <?php endif; ?>

                <?php else: ?>
                <?php if($count > 0): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/keranjang">Keranjang<span class="badge bg-primary"><?php echo e($count); ?></span></a>
                </li>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?>

                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                        <?php endif; ?>
                        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'petugas')): ?>
                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\Users\Aya\Desktop\Badaso\e-perpustakaan\resources\views/livewire/peminjam/kategori.blade.php ENDPATH**/ ?>