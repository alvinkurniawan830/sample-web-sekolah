@extends('layout._base')

@section('main-content')
  @yield('content')

        @stack('sidebar')
      </div>
    </div>
  </div>
@endsection
