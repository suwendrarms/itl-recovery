@extends('layouts/newapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Permissions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Permissions</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12 col-12">
                    
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Add New Permissions
                </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th>Option</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($permissions as $per)    
                  <tr>                                   
                    <td></td>
                    <td>{{$per->name}}
                    </td>
                    <td>{{$per->display_name}}</td>
                    <td>{{$per->description}}</td>

                    <td>
                        <a  href="{{route('permissions.edit',$per->id)}}" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:void(0)" class="delete-user" data-id="{{ $per->id }}"><i class="fas fa-trash-alt"></i></a>
                    </td>                  
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
                
                </div>
            </div>            
        </div>
    <section>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Permissions</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <form role="form" method="post" action="{{ route('permissions.store') }}">
            {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Display Name</label>
                    <input type="text" class="form-control" id="display_name" name="display_name" placeholder="Display Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Discription</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Discription">
                  </div>
                </div>
                <!-- /.card-body -->              
            
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>

          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Change Permissions</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
            <form role="form" method="post" action="{{ route('permissions.store') }}">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Display Name</label>
                    <input type="text" class="form-control" id="display_name" name="display_name" placeholder="Display Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Discription</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Discription">
                  </div>
                </div>
                <!-- /.card-body -->              
            
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>

          </form>
         
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

@endsection