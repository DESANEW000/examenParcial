@extends('admin.main')
@section('contenido')
 <!--CONTENIDO-->
      <!-- TABLA -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="m-0">Categorías <button class="btn btn-primary" onclick="nuevo()"><i class="fas fa-file"></i> Nuevo</button> <a href=""
                      class="btn btn-success"><i class="fas fa-file-csv"></i> CSV</a></h5>
                </div>
                <div class="card-body">
                  <div>
                    {{--  <form action="{{route('vehiculos.index')}}" method="get">
                      <div class="input-group">
                          <input name="texto" type="text" class="form-control" value="{{$texto}}">
                          <div class="input-group-append">
                              <button type="submit" class="btn btn-info"><i class="fas fa-search"></i>
                               Buscar</button>                      
                          </div>
                      </div>
                    </form>  --}}
                  </div>
                  <div class="mt-2">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover table-sm">
                        <thead>
                          <tr>
                            <th width="20%">Opciones</th>
                            <th width="30%">ID</th>
                            <th width="50%">Nombre</th>                            
                          </tr>
                        </thead>
                        {{--  <tbody>
                          @foreach($registros as $reg)
                          <tr>
                            <td>
                              <button type="button" class="btn btn-warning btn-sm editar" onclick="editar({{$reg->id}})">
                                <i class="fas fa-edit"></i>
                              </button>
                              <button type="button" class="btn btn-danger btn-sm eliminar" onclick="eliminar({{$reg->id}})">
                                <i class="fas fa-trash"></i>
                              </button>
                            </td>
                            <td>{{$reg->id}}</td>
                            <td>{{$reg->nombre}}</td>
                          </tr>
                          @endforeach
                        </tbody>  --}}
                      </table>
                      {{--  {{$registros->appends(["texto" => $texto])}}  --}}
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- FIN TABLA -->
      <!--MODAL UPDATE-->
      <div class="modal fade" id="modal-update">
        <div class="modal-dialog modal-lg">
          
        </div>
      </div>
      <!--FIN MODAL UPDATE-->
<!--FIN CONTENIDO-->
@endsection
