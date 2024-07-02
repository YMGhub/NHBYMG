<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    <!-- Aquí puedes añadir enlaces a las secciones de edición -->
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-primary">Gestionar Páginas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
