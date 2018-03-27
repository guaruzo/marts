<?php $__env->startSection('contenido'); ?>

<form method="post" style="width: 40%; margin: 100px auto;">
  

  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="alert alert-danger"><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  
  <div class="form-group">
    <label for="instrumento">Instrumento</label>
    <input type="text" class="form-control" id="instrumento" placeholder="Nombre del instrumento" name="ins">
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>