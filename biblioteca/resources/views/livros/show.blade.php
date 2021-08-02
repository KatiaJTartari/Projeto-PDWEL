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
    <td>{{ $livro->id }}</td>
  </tr>
  <tr>
    <td><strong>Titulo</strong></td>
    <td>{{ $livro->titulo }}</td>
  </tr>
  <tr>
    <td><strong>Autor</strong></td>
    <td>{{ $livro->autor }}</td>
  </tr>
  <tr>
    <td><strong>Páginas</strong></td>
    <td>{{ $livro->paginas }}</td>
  </tr>
</table>
 
</body>
</html>