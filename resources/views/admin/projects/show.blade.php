@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>{{ $project->title }}</h2>
        <div class="mt-4">
            Data: {{ $project->created_at }}
        </div>

        @if (count($project->technologies) > 0)
        <div> <span>Tecnologia :<span>
            @foreach ($project->technologies as $technology)
                <span>{{$technology->name}}</span>
            @endforeach
            
        </div>
        @else
            <p>nessuna tecnologia</p>
        @endif
       

        <div class="mt-4">
            Slug: {{ $project->slug }}
        </div>

        {{-- <div class="mt-4">
            Tipo: {{ $project->type->name }}
        </div> --}}

        <p class="mt-4">
            {{ $project->content }}
        </p>
    </div>
@endsection