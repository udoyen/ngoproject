@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          @if(Auth::guest())
            <div class="content">
              Welcome guest!
            </div>
          @else
              <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    My Home Page, you are signed in!
                </div>
            </div>
          @endif
        </div>
    </div>
</div>
@endsection
