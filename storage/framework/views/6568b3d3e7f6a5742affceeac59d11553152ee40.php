<?php $__env->startSection('title','dashboard'); ?>


<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-2"></i>Tambah data</button>

<table class="table mt-2">  
 <tr>   
   <th>No.</th>
   <th>Name</th> 
   <th>Picture</th>
   <th>Address</th>
   <th>Total Published News</th>
   <th>Terakhir diubah</th>   
   <th>Aksi</th>
 </tr>


 <tr>
  <?php $count = 0; ?>
  <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php $count++; ?>

   <th><?php echo e($count); ?></th>
   
   <th><?php echo e($a->name); ?></th>     
   <th><a href=<?php echo e("gambar/".$a->picture); ?>>lihat gambar</a></th>
   <th><?php echo e($a->address); ?></th>
   <th>hh</th>
   <th>10 menit</th>   
   <th><a  href="<?php echo e("hapus/".$a->id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></a></th>
   <th>
    <a href="<?php echo e("edit/".$a->id); ?>"href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>edit</a>     
   <th>
      
   </th>
   <th onClick="javacript : return confirm('hapus?')" >
    
   </th>
   <th>
     
   </th>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

</table>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
         <form method="post" action="<?php echo e(route('admin.store')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
             <div class="form-group">
                 <label>Nama</label>
                 <input type="text" name="name" class="form-control">
             </div>
             <div class="form-group">
              <label>Picture</label>
              
              <input type="file" name="picture" class="form-control">
             </div>
             <div class="form-group">
                 <label>Address</label>
                 <input type="text" name="address" class="form-control">
             </div>                                       
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
         </form>
     </div>
   </div>
 </div>

</div>

</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\laravel5\resources\views/admin/admin.blade.php ENDPATH**/ ?>