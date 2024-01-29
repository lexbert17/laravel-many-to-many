@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>{{ $project->title }}</h2>
        <div class="mt-4">
            Data: {{ $project->created_at }}
        </div>

        <div class="mt-4">
            Slug: {{ $project->slug }}
        </div>

        <div class="mt-4">
            Tipo: {{ $project->type->name }}
        </div>

        <p class="mt-4">
            {{ $project->content }}
        </p>
    </div>
@endsection