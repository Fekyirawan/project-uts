          @extends('template.base')
          @section('content')
          <div class="container">
            <div class="row">
              <div class="col-md-11" style="margin: 30px 0px 0px 40px;">
                  @if(Auth::check())
                  <H1>Selamat Datang  {{request()->user()->nama}} </H1>
                  @else
                  @endif  
              </div>  
            </div> 
          </div>
          @endsection