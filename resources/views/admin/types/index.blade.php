@extends('layouts.app')

@section('content')

<div class="container p-5">
    <div class="card w-50 mx-auto">
        <div class="card-header">
          <h5 class="card-title">Tipologie</h5>
        </div>
        <ul class="list-group list-group-flush">
            @forelse ($types as $type)
            <li class="list-group-item">{{ $type->name }}</li>
        @empty
            
        @endforelse
        </ul>
    </div>
</div>

@endsection