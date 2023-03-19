  <!-- resources/views/child.blade.php -->

  @extends('layouts.adminbase')

  @section('title', 'Product List')

  @section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Product List
          </h1>
          <ol class="breadcrumb">
              <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Examples</a></li>
              <li class="active">Blank page</li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">

          <!-- Default box -->
          <div class="row">

                  <div class="col-md-6">
                      <div class="box">
                          <table class="table table-striped table-bordered">
                              <tbody>
                                  <tr>
                                      <th style="width: 10px">Id</th>
                                      <th>Parent Category</th>
                                      <th>Title</th>
                                      <th>Description</th>
                                      <th>Keywords</th>
                                      <th>Status</th>
                                      <th>Image</th>
                                      <th>Image Gallery</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                      <th>Show</th>
                                  </tr>
                                  @foreach($data as $rs)
                                  <tr>
                                      <td>{{$rs->id}}</td>
                                      <td>{{$rs->category->title}}</td>
                                      <td>{{$rs->title}}</td>
                                      <td>{{$rs->description}}</td>
                                      <td>{{$rs->keywords}}</td>
                                      <td>{{$rs->status}}</td>


                                      @if($rs->image)
                                      <td><img src="{{Storage::url($rs->image)}}" style="width:40px;"></td>
                                      @endif
                                      <td><a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                          onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"
                                          >Gallery</a></td>

                                      <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}">Edit</a></td>
                                      <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}">Delete</a></td>
                                      <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}">Show</a></td>


                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div><!-- /.box -->
                  </div>
              </div><!-- /.box-body -->
      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  @endsection
