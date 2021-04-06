<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','CommonController@indexAction');
Route::get('/altera_dados_ok','CommonController@alteraDadosOkAction')->middleware('auth');
Route::get('/altera_dados_pessoais','CommonController@alteraDadosPessoaisAction')->middleware('auth');
Route::post('/submits/post_altera_dados_pessoais','UserManagementController@updateCadastroPostAction')->middleware('auth');
Route::get('/submits/post_altera_dados_pessoais','CommonController@alteraDadosPessoaisAction')->middleware('auth');
Route::post('/busca_farmacias','CommonController@buscaFarmaciasAction');
Route::get('/busca_farmacias','CommonController@farmaciasAction');
Route::post('/cadastro_adesao','CommonController@cadastroAdesaoAction');
Route::get('/cadastro_adesao','CommonController@cadastroAdesaoAction');
Route::post('/submits/post_cadastro_adesao','UserManagementController@cadastroAdesaoPostAction');
Route::get('/submits/post_cadastro_adesao','CommonController@cadastroAdesaoAction');
Route::get('/fale_conosco', 'CommonController@faleConoscoAction');
Route::get('/fale_conosco_ok','CommonController@faleConoscoOkAction')->name('fale_conosco_ok');
Route::post('/submits/post_fale_conosco','FaleConoscoController@faleConoscoPostAction');
Route::get('/submits/post_fale_conosco','CommonController@faleConoscoAction');
Route::get('/farmacias','CommonController@farmaciasAction');
Route::get('/lgv_login','CommonController@loginAction');
Route::get('/nova_requisicao','CommonController@novaRequisicaoAction')->middleware('auth');
Route::post('/submits/post_nova_requisicao','UserManagementController@insertAdesaoPostAction')->middleware('auth');
Route::get('/submits/post_nova_requisicao','CommonController@novaRequisicaoAction')->middleware('auth');
Route::get('/painel_pessoal','CommonController@painelPessoalAction')->middleware('auth');
Route::get('/pos_cadastro_adesao_ok','CommonController@posCadastroAdesaoOKAction')->name('pos_cadastro_adesao_ok');
Route::get('/processo_ok_nova_requisicao','CommonController@processoOkNovaRequisicaoAction')->name('processo_ok_nova_requisicao');
Route::get('/produtos','CommonController@produtosAction');
Route::get('/programa','CommonController@programaAction');
Route::get('/regulamento','CommonController@regulamentoAction');
Route::get('/sobre','CommonController@sobreAction');
Route::get('/logout','CommonController@logoutAction');
Route::get('/api/accept_terms','UserManagementController@AcceptUserTerms')->middleware('auth');
Route::get('/api/list_terms','UserManagementController@ListAcceptUserTerms')->middleware('auth');
Route::get('/api/exclude_terms','UserManagementController@ExcludeUserTerms')->middleware('auth');

//APIS Calls

Route::get('/api/fetchCidadesByEstado/{idEstado}','ApiController@fetchCidadesByEstadoAction');
Route::get('/api/fetchCidadesByFarmaciaEstadoAction/{idEstado}','ApiController@fetchCidadesByFarmaciaEstadoAction');
Route::get('/api/fetchProdutosByMarca/{psMarca}','ApiController@fetchProdutosByMarcaAction');
Route::get('/api/fetchBairrosByCidade/{cidade}','ApiController@fetchBairrosByCidadeAction');
Route::get('/api/fetchFarmaciasByBairro/{cidade}/{bairro}','ApiController@fetchFarmaciasByBairroAction');
Route::post('/api/consultaCadastro','SevenPDVController@consultaCadastroAction');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/test_exclusao', 'HomeController@test_exclusao')->name('test_exclusao');
//Errors

Route::get('/500','CommonController@err500Action')->name('err_500');
