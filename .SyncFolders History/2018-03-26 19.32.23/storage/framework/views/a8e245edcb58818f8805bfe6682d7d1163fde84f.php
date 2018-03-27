<?php $__env->startSection('contenido'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  <link rel="stylesheet" href="../DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css">

<script type="text/javascript" src="../DataTables/datatables.min.js"></script>



</head>
<body>



    <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Alumnos </h2>
                </div>
                <?php if(session('status')): ?>
                  <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                  </div>
                <?php endif; ?>

                <?php if($alumnos->isEmpty()): ?>     
                    <p> No hay Alumnos.</p>
                <?php else: ?>
                    <table id="example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>
                            <td><?php echo $alumno->id; ?></td>
                            <td><a href="<?php echo action('AlumnoController@show', $alumno->id); ?>"><?php echo $alumno->nom; ?></a></td>
                             
                             
                             <td><?php echo $alumno->dir; ?> </td>
                             <td><?php echo $alumno->tel; ?> </td>                         
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<script type="text/javascript" src="../DataTables/datatables.min.js"></script>

            <script type="text/javascript">$(document).ready(function() {
                $('#example').DataTable();
            } );</script>

</body>
</html>













<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>