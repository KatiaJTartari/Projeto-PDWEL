<html>
<head>
  <meta charset="utf-8">
  <title>Biblioteca</title>
</head>
<body>
 
<h1>Atualizar Livro</h1>
 
<?php if($errors->any()): ?>
  <h2>Houve alguns erros ao processar o formulário</h2>
  <ul>
     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
<?php endif; ?>
 
<form action="<?php echo e(route('livros.update', $livro->id)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
 
<table width="200" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td>Título:</td>
    <td><input type="text" value="<?php echo e($livro->titulo); ?>" 
      name="titulo" id="titulo" placeholder="Título"></td>
  </tr>
  <tr>
    <td>Autor:</td>
    <td><input type="text" value="<?php echo e($livro->autor); ?>" 
      name="autor" id="autor" placeholder="Autor"></td>
  </tr>
  <tr>
    <td>Páginas</td>
    <td><input type="text" value="<?php echo e($livro->paginas); ?>" 
      size="10" name="paginas" id="paginas" 
      placeholder="Quant. Páginas"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><button type="submit">Salvar Alterações</button></td>
  </tr>
</table>
</form>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\biblioteca\resources\views/livros/edit.blade.php ENDPATH**/ ?>