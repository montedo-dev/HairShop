<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* USER */ 

Route::post('/solicitarAgendamento', 'AgendamentoControl@store')->name('solicitaAgendamento');

Route::get('/getFuncionario', 'UserControl@retornaFuncionarioServico')->name('getFuncionario');
Route::get('/getHorario', 'UserControl@retornaHorario')->name('getHorario');

Route::post('/cadastrarCliente', 'UserControl@CadastroCliente')->name('cadastrarCliente');
Route::post('/cadastrarUsuario', 'UserControl@CadastroUsuario')->name('cadastrarUsuario');


Route::put('/editarCliente', 'UserControl@EditarCliente')->name('editarCliente');
Route::delete('/deletarCliente', 'UserControl@deletarCliente')->name('deletarCliente');

/* FINAL USER */ 


/* SERVICO */ 


Route::post('/cadastrarServico', 'ServicoControl@store')->name('cadastrarServico');


/* FINAL SERVICO */ 


/* Cargo */ 


Route::post('/cadastrarCargo', 'CargoControl@store')->name('cadastrarCargo');



/* FINAL Cargo */ 


/* Cargo */ 


Route::post('/solicitarAgendamento', 'AgendamentoControl@store')->name('solicitarAgendamento');
Route::delete('/cancelarAgendamento', 'AgendamentoControl@cancelar')->name('cancelarAgendamento');
Route::put('/remarcarAgendamento', 'AgendamentoControl@remarcar')->name('remarcarAgendamento');



/* FINAL Cargo */ 
