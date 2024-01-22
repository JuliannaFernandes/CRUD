<?php

use Illuminate\Http\Request; //impotação da classe request
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;
use Illuminate\Http\Client\Request as ClientRequest;

use function Psy\debug;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/cadastrar-candidato', function(Request $informacoes){
    Candidato::create([
        'nome'     => $informacoes -> nome_candidato,
        'telefone' => $informacoes -> telefone_candidato,
        'email'    => $informacoes -> email_candidato,
        'endereco' => $informacoes -> endereco_candidato
    ]);
    echo "Candidato criado com sucesso! ";
});

Route::get('/buscar-candidato/{id_do_candidato}', function ($id_do_candidato){ //pega o id
   $candidato = Candidato::findOrFail($id_do_candidato);
   echo $candidato -> nome;
   echo "<br/>";
   echo $candidato -> telefone;
   echo "<br/>";
   echo $candidato -> email;
   echo "<br/>";
   echo $candidato -> endereco;
});

Route::get('/editar-candidato/{id_do_candidato}', function ($id_do_candidato){ //pega o id e retorna
   $candidato = Candidato::findOrFail($id_do_candidato);
   return view('editar_candidato', ['candidato' => $candidato]);

});
Route::put('/atualizar-candidato/{id_do_candidato}', function (Request $informacoes, $id_do_candidato){
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato -> nome     = $informacoes -> nome_candidato;
    $candidato -> telefone = $informacoes -> telefone_candidato;
    $candidato -> email    = $informacoes -> email_candidato;
    $candidato -> endereco = $informacoes -> endereco_candidato;
    $candidato->save();
    echo"Candidato atualizado com sucesso!";

});//enviando e atualizando

Route::get('/excluir-candidato/{id_do_candidato}', function ($id_do_candidato){
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->delete();
    echo"Candidato excluido com sucesso!";

});