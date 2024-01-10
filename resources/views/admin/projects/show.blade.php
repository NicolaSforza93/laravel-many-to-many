@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>{{ $project->name_project }}</h1>
        @if ($project->type)
            <p class="text-decoration-underline">{{ $project->type->name }}</p>
        @endif
        <p>{{ $project->date_creation }}</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta praesentium non, expedita sit veritatis perspiciatis iusto molestias ipsum blanditiis quia ipsam doloremque aperiam animi nemo! Impedit, necessitatibus praesentium! Nemo, quisquam voluptatum nisi quasi voluptas deleniti eius ea, nihil officiis error optio ut impedit tenetur. Quos, ducimus. At aliquid fuga molestias!</p>
    </div>
</section>
    
@endsection