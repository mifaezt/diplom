@extends('layouts.main') 

@section('title', 'Edit')

@section('content')
    
<form action="{{ route('admin.news.update', $news->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
        <label for="title">Заголовок</label>
        <input type="text" id="title" name="title" value="{{ old('title', $news->title) }}" required>
    </div>
    <div>
        <label for="content">Содержание</label>
        <textarea id="content" name="content" required>{{ old('content', $news->content) }}</textarea>
    </div>
    <button type="submit">Обновить новость</button>
</form>

@endsection