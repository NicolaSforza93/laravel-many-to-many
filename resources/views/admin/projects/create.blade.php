@extends('layouts.app')

@section('content')

<section class="p-4">
    <div class="container">
        <h1>Nuovo Progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST" class="p-3 w-50 m-auto">
            @csrf
            <div class="mb-3">
                <label class="form-label text-uppercase">Nome Progetto</label>
                <input type="text" required class="form-control" name="name_project" id="name_project" value="{{ old('name_project') }}">
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Tipologia</label>
                <select class="form-select" name="type_id" id="type_id" aria-label="Floating label select example">
                    <option value="">Seleziona una Tipologia</option>
                    @foreach ($types as $type)
                        <option @selected( old('type_id') == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="basic-url" class="form-label text-uppercase">Data Creazione</label>
                <input type="date" required class="form-control" name="date_creation" value="{{ old('date_creation') }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Aggiungi</button>
                
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</section>
    
@endsection