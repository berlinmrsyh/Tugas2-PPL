<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>
    <h2>User Registration</h2>
    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <button type="submit" class="btn">Register</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testppl_nyoba\resources\views/register.blade.php ENDPATH**/ ?>