<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <h2>User Login</h2>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" class="btn">Login</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testppl_nyoba\resources\views/login.blade.php ENDPATH**/ ?>