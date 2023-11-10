@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'map'
])

@section('content')
    <div class="content">
        Client
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.initGoogleMaps();
        });
  </script>
@endpush