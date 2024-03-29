@extends('layouts.app')

@section('content')
<head>
  <title> Lista de clientes </title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                       
                           <h1 class="display-3">Lista de clientes</h1>
                           <hr>
                               <div class='row mt-4'>
                                  
                                  <div class='col-md-3'>
                                       <a href="{{route('home')}}"><button class="btn btn-outline-dark">Voltar</button></a>
                                       <a href="{{route('cadastro-servico')}}"><button class="btn btn-outline-success">Adicionar servico</button></a>
                                  </div>
                                
                                </div>



                            <div class="row mt-4"> 
                                <div class="col-md-12">


                                <div class="form-group">

                                  <label for="pesquisa_cliente">Pesquisar por: </label>
                                 
                                  <select id="select_pesquisa" class="form-control" style="width: 20%;">
                                    <option value='1' selected>Nome</option>                                   
                                  </select>                                       
                                  
                                </div>

                                <div class="form-group" style="width: 40%;">      

                                  <input type="text" id="pesquisa_cliente" class="form-control" placeholder="Pesquise aqui">

                                </div>
                                
                            
                              
                              </div>
                                  
                          </div>    
                        

                       
                            <table class="table table-bordered table-hover mt-5" id="tabela_usuario">
                                <thead>
                                    <th> Código  </th>
                                    <th> Nome    </th>
                                    <th> CPF    </th>  
                                    <th> E-mail </th>
                                    <th> Telefone  </th>
                                    <th> Data de cadastro </th>
                                    <th> Tipo </th>                                     
                                    <th> Ativo </th>
                                    <th> Editar </th>                                   
                                    <th> Inativar </th>                                  

                                </thead>
                                
                                <tbody>
                                    @foreach($user as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td class="td_nome_usuario">{{$u->name}}</td>
                                        <td>{{$u->cpf}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->telefone}}</td>
                                        <?php $data_cadastro = date('d/m/Y',strtotime($u->created_at)); ?>
                                        <td>{{$data_cadastro}}</td>
                                        <?php $tipo = $u->cliente ?? $u->funcionario; ?>
                                        @if($tipo == 1)
                                         <td>Cliente</td>
                                        @else
                                        <td>Funcionário</td>
                                        @endif  
                                         <td>{{$u->ativo}}</td>                                  
                                        <td><a > <button class="btn btn-primary" value='{{$u->id}}'> Editar </button> </a></td>
                                        <td><a > <button class="btn btn-danger" value='{{$u->id}}'> Inativar </button> </a></td>
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                           
                        
                          
                                       
                
            </div>
        </div>
    </main>
</body>

<!-- Scripts -->


<script>
  

</script>


<!-- END SCRIPT -->

<!-- MODAL EDIT -->
<!-- 
<<div class="modal fade" id="editModalusuario" tabindex="-1" role="dialog" aria-labelledby="titulo_usuario" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo_usuario">Editar usuario</h5>

        <button type="button"  data-dismiss="modal" class="close"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="POST" id='frm_edt'>
          
           
           <input type="hidden" name="id_usuario" id='id_usuario' value="">
        </form>
         <button id='edt_submit' class="btn btn-primary">Salvar alterações</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div> -->
<!-- END MODAL EDIT -->

@endsection