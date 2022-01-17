<html>
<head>
  <meta charset="utf-8">
  <title>Biblioteca</title>
</head>
<body>
 
<h1>Livros Cadastrados</h1>
 
<?php if($status = Session::get('mensagem')): ?>
  <h2><?php echo e($status); ?></h2>
<?php endif; ?>
 
<h4><a href="<?php echo e(route('livros.create')); ?>">Cadastrar 
  Novo Livro</a></h4>
 
<table class width="709" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td width="85" align="center"><strong>Id</strong></td>
    <td width="161" align="center"><strong>Título</strong></td>
    <td width="156" align="center"><strong>Autor</strong></td>
    <td width="98" align="center"><strong>Páginas</strong></td>
    <td width="167" align="center"><strong>Opções</strong></td>
  </tr>
    
  <?php $__currentLoopData = $livros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td align="center"><?php echo e($livro->id); ?></td>
      <td><?php echo e($livro->titulo); ?></td>
      <td><?php echo e($livro->autor); ?></td>
      <td align="center"><?php echo e($livro->paginas); ?></td>
      <td align="center">
       
      <form action="<?php echo e(route('livros.destroy', $livro->id)); ?>" 
         method="post">
         <a href="<?php echo e(route('livros.show', 
           $livro->id)); ?>">Detalhes</a> | 
           <a href="<?php echo e(route('livros.edit', 
           $livro->id)); ?>">Editar</a>
       
         <?php echo csrf_field(); ?>
         <?php echo method_field('DELETE'); ?>
       
         <button type="submit">Excluir</button>
      </form>
       
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</table>

<!-- Paginaginação -->
 <?php echo e($livros->links()); ?> 

</body>
</html>
<?php /**PATH C:\xampp\htdocs\biblioteca\resources\views/livros/index.blade.php ENDPATH**/ ?>