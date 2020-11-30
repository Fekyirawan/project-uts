
@extends('template.base')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-11">
          <div class="row">
            <div class="col-md-12">
            @include('utils.notif')
            </div>
          </div>
          <div class="card" style="margin-top: 40px;">
          <div class="card-header">
            Data Produk
            <a href="{{ url('artikel/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus ml-2"></i> tambah data</a>
            </div>
            <div class="card-body">
              <table class="table table-datatable">
                <thead>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                </thead>
                <tbody>
                  @foreach($list_artikel as $artikel)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>
                        <div class="btn-group">
                          <a href="{{ url('artikel', $artikel->id) }}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                          <a href="{{ url('artikel', $artikel->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                          @include('utils.delete',['url' => url('artikel', $artikel->id)])
                        </div>
                       </td>
                      <td> {{$artikel->judul}} </td>
                      <td>{{$artikel->deskripsi}}</td>
                     </tr>
                  @endforeach       
                </tbody>
              </table> 
            </div>
           
          </div>
        </div>
      </div>  
    </div> 
  </div>
@endsection


