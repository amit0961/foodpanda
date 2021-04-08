@extends('layouts.backend.master')
@section('title')
    Category Create
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row  mb-2">
        <div class="col-sm-6">
          <h1>Category Create</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <!-- left column -->
        <div class="col-md-6 ">

          {{--============ Success Message =============== --}}

          @if(Session::get('message'))

          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('message') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          {{--============ Success Message =============== --}}
          
          <!-- Horizontal Form -->
          <div class="card card-info ">
            <div class="card-header  ">
              <h3 class="card-title ">Add Category Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('category.store')}}" method="POST" >
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="category_name" class="col-sm-4 col-form-label">Category Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="order_number" class="col-sm-4 col-form-label">Order Number</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="order_number" name="order_number" placeholder="Order Number">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="added_on" class="col-sm-4 col-form-label">Added On</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="added_on" name="added_on">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="category_status" class="col-sm-4 col-form-label">Category Status</label>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" name="category_status" value="1">
                    <label for="customCheckbox1" class="custom-control-label">Active</label>
                  </div>
                  <div class="custom-control custom-checkbox" style="padding-left: 2.5rem;">
                    <input class="custom-control-input" type="checkbox" id="customCheckbox2" name="category_status" value="0">
                    <label for="customCheckbox2" class="custom-control-label">InActive</label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center ">
                <button type="submit" class="btn btn-info">Category Add</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>

@stop