@extends('layouts.plantilla-admin')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center display-4">Dashboard</h3> 
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-3 d-flex align-items-center text-center mt-5 mb-5" style="height: 217px;">
            <a href="{{ route('produccion.ver') }}"  class="d-flex flex-column">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z"/></svg>
                <span>Produccion</span></a>
            </a>
        </div>
    </div>
</div>   
@endsection