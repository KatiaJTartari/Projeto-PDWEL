<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller{
    // Mostra a view listando os livros cadastrados
    public function index(){
        // Obtém todos os livros cadastrados
        //$livros = Livro::all();
        
        // Direciona para a view e fornece um vetor contendo os livros
        //return view('livros.index', compact('livros'));
        
        // Ou para fazer Paginação
        $livros = Livro::paginate(8);
        return view('livros.index', compact('livros'));
    }

    // Mostra a view para cadastrar um novo livro
    public function create(){
        return view('livros.create');
    }

  // Recebe as informações do formulário e as grava no banco de dados
  public function store(Request $request){
    // Valida o formulário
    $request->validate([
      'titulo' => 'required',
      'autor' => 'required',
      'paginas' => 'required']);
     
    // Obtém os valores do form
    Livro::create($request->all());
      
    // Direciona para página cadastro novamente, com uma mensagem de sucesso
    return redirect()->route('livros.create')
      ->with('mensagem', 'Livro salvo com sucesso.');
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    //{
        //
    //}

    // Mostra os detalhes do livro informado como argumento
    public function show(Livro $livro){
        return view('livros.show', compact('livro'));
    }

    // Método que permite excluir um livro
    public function destroy(Livro $livro){
        // Chama o método delete() do Eloquent
        $livro->delete();
     
       // Chama a view com uma mensagem de sucesso.
       return redirect()->route('livros.index')
        ->with('mensagem','Livro excluído com sucesso.');
    }
    
    // Permite editar o livro recebido como argumento 
    public function edit(Livro $livro){
        // Chama a view e passa o livro para ela
        return view('livros.edit', compact('livro'));
    }
    
    // Permite atualizar os dados de um livro
    public function update(Request $request, Livro $livro){
        // Valida os dados vindo do formulário
        $request->validate([
        'titulo' => 'required',
        'autor' => 'required',
        'paginas' => 'required']);
       
      // Atualizar o livro na tabela do banco de dados
      $livro->update($request->all());
       
      // Volta para a listagem de livros
      return redirect()->route('livros.index')
        ->with('mensagem', 'Livro atualizado com sucesso.');
    }
       
}

?>