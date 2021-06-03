@if(Session::has('info'))
  Message: {{ Session::get('info') }}
@endif