<html>
<head>
  <meta charset="utf-8">
  <title>Biblioteca</title>
</head>
<body>
 
<h1>Atualizar Livro</h1>
 
@if($errors->any())
  <h2>Houve alguns erros ao processar o formulário</h2>
  <ul>
     @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
  </ul>
@endif
 
<form action="{{ route('livros.update', $livro->id) }}" method="post">
@csrf
@method('PUT')
 
<table width="200" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td>Título:</td>
    <td><input type="text" value="{{ $livro->titulo }}" 
      name="titulo" id="titulo" placeholder="Título"></td>
  </tr>
  <tr>
    <td>Autor:</td>
    <td><input type="text" value="{{ $livro->autor }}" 
      name="autor" id="autor" placeholder="Autor"></td>
  </tr>
  <tr>
    <td>Páginas</td>
    <td><input type="text" value="{{ $livro->paginas }}" 
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
</html>