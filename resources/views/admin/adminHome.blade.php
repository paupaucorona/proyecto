@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
						<div class="alert alert-success" role="alert">
                            <p>You are logged in as Administrador </p>
                        </div>
						<div class="card-header">
                  <a href="{{ url('/admin/adminShowUsers') }}" class="btn btn-xs btn-info pull-right"style="background-color:#45B39D;">{{ __('Ver usuarios') }}</a>
                  <a href="{{ url('/admin/adminCreateUsers') }}" class="btn btn-xs btn-info pull-right"style="background-color:#45B39D;">{{ __('Crear usuario') }}</a>
                </div>
				 <div class="card-body">
                  @yield('content')
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
