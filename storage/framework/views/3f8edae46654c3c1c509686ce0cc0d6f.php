<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <div class="card__grid">
    <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <img src="<?php echo e(Vite::asset('resources/image/'.$i['path'])); ?>">
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur dolores quia vel, asperiores consectetur omnis doloremque corporis expedita amet mollitia labore ut, aut fuga, natus veniam nobis quas. Commodi, pariatur!</p>
    </div>   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
</html><?php /**PATH D:\xampp\htdocs\project\resources\views/array.blade.php ENDPATH**/ ?>