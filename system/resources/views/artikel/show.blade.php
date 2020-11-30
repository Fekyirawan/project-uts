
@extends('template.base')
@section('content')
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="card" style="margin-top: 40px;">
                  <div class="card-header">
                    Detail Data Artikel
                  </div>
                  <div class="card-body" >
                    <h3>{{$artikel->judul}}</h3>
                    <hr>
                    <p>
                         {!! nl2br($artikel->deskripsi) !!}
                    </p>
                   
                  </div>
                </div>
              </div>  
            </div> 
          </div>


@endsection