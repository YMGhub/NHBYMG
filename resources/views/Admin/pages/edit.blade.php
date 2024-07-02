<!-- resources/views/admin/pages/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar Página</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.pages.update', $page->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" class="form-control" value="{{ $page->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Contenido</label>
                            <textarea name="content" class="form-control" rows="5" required>{{ $page->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 