<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/test.css')); ?>">
</head>

<body>

    <?php echo $__env->make('template.switch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">

        <?php echo $__env->make('template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('template.sidebar-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('template.sidebar-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('template.midbar'); ?>

    </div>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\USER\OneDrive\Documents\laravel5\resources\views/template/layout.blade.php ENDPATH**/ ?>