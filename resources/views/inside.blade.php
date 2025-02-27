<!-- Подключаем шаблон (шапка)-->
@extends('layouts.main')
<!-- yeld реализация -->
@section('title', 'Внутри')

@section('content')

<div class="container">
    <h1 class="text-center my-5">Вид домика внутри</h1>
    <div class="row">
        @foreach($interiorImages as $image)
        <div class="col-md-4 mb-4">
            <div class="card interior-card">
                <img src="{{ asset($image['url']) }}" class="card-img-top" alt="{{ $image['description'] }}">
                <div class="card-body">
                    <p class="card-text">{{ $image['description'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script src="{{ asset('scripts/interior.js') }}"></script>

@endsection