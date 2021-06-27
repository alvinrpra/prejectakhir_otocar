<?php $__env->startSection('content'); ?>  
<?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</div>   
  <div class="main">
    <div class="card">
      <div class="head-card">
        <img src="<?php echo e(asset('img/hutan.webp')); ?>" alt="">
      </div>
     <div class="body-card">
        <h1><?php echo e($b->title); ?></h1>
        <p><?php echo e($b->content); ?>.</p>
        <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
     </div>
    </div> 
  </div> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\laravel5\resources\views/home.blade.php ENDPATH**/ ?>