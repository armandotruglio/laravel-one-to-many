@extends("layouts.app");

@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="fw-bold text-center"> {{ $project->title }} </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <div class="card p-3">
                <div class="card-title">
                    <div class="span"> {{ $project->title }} </div>
                </div>
                <div class="card-body">
                    <p>
                        {{ $project->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
