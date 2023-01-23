@extends('layouts.app')

@section('title')
    | Admin Projects
@endsection

@section('content')
    <div class="container">

        <div class="d-flex align-items-center justify-content-between">
            <h1 class="my-5">Projects</h1>
            <a href="{{ route('admin.projects.create') }}" title="Create" class="btn btn-outline-primary"><i
                    class="fa-solid fa-plus"></i>
            </a>
        </div>

        @if (session('deleted'))
            <div class="alert alert-primary" role="alert">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('deleted') }}
            </div>
        @endif

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 mb-5">
            @foreach ($projects as $project)
                <div class="col p-3">
                    <div class="card">
                        @if ($project->cover_image)
                            <img src="{{ asset('storage/' . $project->cover_image) }}"
                                alt="{{ $project->cover_image_original }}">
                        @endif

                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text fw-bold">{{ $project->title }}</p>

                            <div class="d-flex justify-content-around">

                                <a href="{{ route('admin.projects.show', $project) }}" title="Show"
                                    class="btn btn-outline-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="{{ route('admin.projects.edit', $project) }}" title="Edit"
                                    class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i>
                                </a>

                                @include('admin.partials.form-delete', ['project' => $project])

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center"> {{ $projects->links() }} </div>

    </div>
@endsection
