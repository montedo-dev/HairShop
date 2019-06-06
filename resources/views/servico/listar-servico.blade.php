@extends('layouts.app')

@section('content')
<head>
  <title> Lista de servicos </title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11 offset-md-1 mt-5">
                   
                       
                           <h1 class="display-3">Lista de servicos</h1>
                            

                       
                          


                               <div class='row mt-4'>
                                  
                                  <div class='col-md-3'>
                                       <a href="{{route('home')}}"><button class="btn btn-outline-dark">Voltar</button></a>
                                       <a href="{{route('cadastro-servico')}}"><button class="btn btn-outline-success">Adicionar servico</button></a>
                                  </div>
                                
                                </div>



                            <div class="row mt-4"> 
                                <div class="col-md-12">


                                <div class="form-group">

                                  <label for="pesquisa_servico">Pesquisar por: </label>
                                 
                                  <select id="select_pesquisa" class="form-control" style="width: 20%;">
                                    <option value='1' selected>Nome</option>                                   
                                  </select>                                       
                                  
                                </div>

                                <div class="form-group" style="width: 40%;">      

                                  <input type="text" id="pesquisa_servico" class="form-control" placeholder="Pesquise aqui">

                                </div>
                                
                            
                              
                              </div>
                                  
                          </div>    
                        

                       
                            <table class="table table-bordered table-hover" id="tabela_servico">
                                <thead>
                                    <th> Código  </th>
                                    <th> Nome    </th>
                                    <th> Valor    </th> 
                                    <th> Duração(minutos)  </th>                                 
                                    <th> Editar   </th> 
                                    <th> Desativar</th>                                  
                                    <th> Deletar  </th>                                  

                                </thead>
                                
                                <tbody>
                                    @foreach($servicos as $s)
                                    <tr>
                                        <td>{{$s->id}}</td>
                                        <td class="td_nome_servico">{{$s->nome}}</td>
                                        <td>{{$s->valor}}</td> 
                                        <td> {{$s->duracao}}</td>                                 
                                        <td><a > <button class="btn btn-primary" value='{{$s->id}}'> Editar </button> </a></td>
                                        <td><a > <button class="btn btn-dark" value='{{$s->id}}'> Desativar </button> </a></td>
                                        <td><a > <button class="btn btn-danger" value='{{$s->id}}'> Deletar </button> </a></td>

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







<!-- MODAL EDIT -->
<!-- 
<<div class="modal fade" id="editModalservico" tabindex="-1" role="dialog" aria-labelledby="titulo_servico" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo_servico">Editar servico</h5>

        <button type="button"  data-dismiss="modal" class="close"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="POST" id='frm_edt'>
          
           
           <input type="hidden" name="id_servico" id='id_servico' value="">
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