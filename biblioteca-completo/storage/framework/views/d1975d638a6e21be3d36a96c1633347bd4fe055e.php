<html>
<head>
  <meta charset="utf-8">
  <title>Biblioteca</title>
 
  <style>
    a {color: blue}
  </style>
</head>
<body>
 
<h1>Detalhes do Livro</h1>
 
<table width="500" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td><strong>Id</strong></td>
    <td><?php echo e($livro->id); ?></td>
  </tr>
  <tr>
    <td><strong>Titulo</strong></td>
    <td><?php echo e($livro->titulo); ?></td>
  </tr>
  <tr>
    <td><strong>Autor</strong></td>
    <td><?php echo e($livro->autor); ?></td>
  </tr>
  <tr>
    <td><strong>Páginas</strong></td>
    <td><?php echo e($livro->paginas); ?></td>
  </tr>
</table>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\biblioteca\resources\views/livros/show.blade.php ENDPATH**/ ?>