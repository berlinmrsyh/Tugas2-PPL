<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        /* CSS untuk header umum */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        /* CSS untuk footer umum */
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* CSS untuk container konten */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Application</h1>
    </header>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer>
        <p>&copy; 2024 My Application. All rights reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\testppl_nyoba\resources\views/master.blade.php ENDPATH**/ ?>