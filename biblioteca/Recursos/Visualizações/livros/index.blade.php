<html>
<head>
  <meta charset="utf-8">
  <title>Biblioteca</title>
</head>
<body>
 
<h1>Livros Cadastrados</h1>
 
@if($status = Session::get('mensagem'))
  <h2>{{ $status }}</h2>
@endif
 
<h4><a href="{{ route('livros.create') }}">Cadastrar 
  Novo Livro</a></h4>
 
<table class width="709" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td width="85" align="center"><strong>Id</strong></td>
    <td width="161" align="center"><strong>Título</strong></td>
    <td width="156" align="center"><strong>Autor</strong></td>
    <td width="98" align="center"><strong>Páginas</strong></td>
    <td width="167" align="center"><strong>Opções</strong></td>
  </tr>
    
  @foreach($livros as $livro)
    <tr>
      <td align="center">{{ $livro->id }}</td>
      <td>{{ $livro->titulo }}</td>
      <td>{{ $livro->autor }}</td>
      <td align="center">{{ $livro->paginas }}</td>
      <td align="center">
       
      <form action="{{ route('livros.destroy', $livro->id) }}" 
         method="post">
         <a href="{{ route('livros.show', 
           $livro->id) }}">Detalhes</a> | 
           <a href="{{ route('livros.edit', 
           $livro->id) }}">Editar</a>
       
         @csrf
         @method('DELETE')
       
         <button type="submit">Excluir</button>
      </form>
       
    </tr>
    @endforeach
    
</table>

<!-- Paginação - >
 {{$livros->links()}} 

</body>
</html>
