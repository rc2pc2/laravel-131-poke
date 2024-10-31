@extends("layouts.app")

@section("page-title", "Editing $environment->name")

@section("main-content")
<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("environment.update", $environment->id) }}">
            @method("PUT")
            @csrf

            <h1 class="mb-3">
                Editing {{ $environment->name }}:
            </h1>
            <div class="mb-3">
                <label for="environment-name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="environment-name" name="name"
                value="{{ $environment->name }}">
            </div>

            <div class="mb-3">
                <label for="environment-element" class="form-label">Element:</label>
                <input type="text" class="form-control" id="environment-element" name="element" value="{{ $environment->element }}">
            </div>

            <div class="mb-3">
                <label for="environment-walking-speed" class="form-label">Walking Speed:</label>
                <input type="number" min="0" max="100" class="form-control" id="environment-walking-speed" name="walking_speed" value="{{ $environment->walking_speed }}">
            </div>

            <div class="mb-3">
                <label for="environment-image" class="form-label">Image url:</label>
                <input type="text" class="form-control" id="environment-image" name="image" value="{{ $environment->image }}">
            </div>

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Update {{ $environment->name }}
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset fields
                </button>
            </div>
        </form>
    </div>
</section>
@endsection




