<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function formCadastroCliente(){
         return view('usuario/cadastro-cliente');
    }


    public function index()
    {
        $user = User::all();
        return $user->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CadastroCliente(Request $request)
    {


          $mensagens = [            
            'nome.required' => 'O nome é obrigatório',
            'nome.string' => 'Você deve digitar um texto', 
            'cpf.unique' => 'O CPF já está cadastrado para outro usuário',
            'cpf.min' => 'CPF inválido',
            'cpf.required' => 'O CPF é obrigatório',
            'email.required' => 'O e-mail é obrigatório',
            'email.email' => 'O e-mail informado é inválido',
            'email.unique' => 'O e-mail já está cadastrado para outro usuário',
            'senha.required' => 'A senha é obrigatória',
            'senha.confirmed' => 'A senha não é igual a confirmação de senha',
            'senha_confirmation.required' => 'A confirmação de senha é obrigatória',
            'senha_confirmation.same' => 'A confirmação da senha não é igual a senha',
            'telefone.required' => 'O telefone é obrigatório',
            'telefone.max' => 'Telefone inválido! O telefone deve ser informado junto com o DDD',
            'telefone.min' => 'Telefone inválido! O telefone deve ser informado junto com o DDD'
        ];

        $campos = [

            'nome' => 'bail|required|string',
            'cpf' => 'bail|required|unique:users,cpf|min:14|max:14',
            'email' => 'bail|required||email|unique:users,email',
            'senha' => 'bail|required|confirmed',
            'senha_confirmation' => 'bail|required|same:senha',
            'telefone' => 'bail|required|max:15|min:15'
        ];
         $request->validate($campos, $mensagens);





        $user = new User();
        $user->name = $request->input('nome');
        $user->cpf = $request->input('cpf');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('senha'));
        $user->telefone = $request->input('telefone');
        $user->cliente = 1;
        $user->funcionario = 2;
        $user->ativo = 1;

        $user->save();

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
