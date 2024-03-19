<?php $__env->startSection('title', 'Welcome'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Welcome to My Application</h1>
    <p>This is a simple application for managing users, contacts, and addresses.</p>
    <a href="<?php echo e(route('register')); ?>">Register</a>
    <a href="<?php echo e(route('login')); ?>">Login</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testppl_nyoba\resources\views/landing.blade.php ENDPATH**/ ?>