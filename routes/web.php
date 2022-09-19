<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;



/*Route::get('/', function () {
    return "Olá, seja bem vindo ao curso";
}); */

Route::get('/',[PrincipalController::class,'principal'])->name('site.index');
Route::get('/contato',[ContatoController::class,'contato'])->name('site.contato');
Route::get('/sobre-nos',[SobreNosController::class,'sobreNos'])->name('site.sobrenos');

Route::prefix('/app')->group(function(){
  Route::get('/login',function(){return 'login';})->name('app.login');
  Route::get('/clientes',function(){return 'cliente';})->name('app.clientes');
  Route::get('/fornecedores',[FornecedorController::class,'index'])->name('app.fornecedores');
  Route::get('/produtos',function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}',[TesteController::class,'teste'])->name('teste');


/* redirecionamento de rotas
Route::get('rota1',function(){
   echo 'Rota 1';
})->name('site.rota1');
Route::get('rota2',function(){
   return redirect()->route('site.rota1');
})->name('site.rota2');
*/
/* rotas de erros
Route::fallback(function(){
  echo "A rota não existe, volte <a href=".route('site.index').">Clique aqui</a>";
});
*/

/* paramentros nas rotas
Route::get(
    'contato/{name}/{categoria_id}',
     function(
        string $nome = "Desecohecido",
        int $categoria_id = 1
     ){
       echo "Estamos aqui $nome - $categoria_id";
     }
)->where('categoria_id','[0-9]+')->where('name','[A-Za-z]+');
*/



    





