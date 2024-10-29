@extends("layouts.app")

@section("page-title", "Create new pokemon")

@section("main-content")
<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("pokemon.store") }}">
            @csrf

            <h1 class="mb-3">
                Creating a new pokemon:
            </h1>
            <div class="mb-3">
                <label for="pokemon-name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="pokemon-name" name="name">
            </div>
            <div class="mb-3">
                <label for="pokemon-species" class="form-label">Species:</label>
                <input type="text" class="form-control" id="pokemon-species" name="species">
            </div>
            <div class="mb-3">
                <label for="pokemon-ability" class="form-label">Ability:</label>
                <input type="text" class="form-control" id="pokemon-ability" name="ability">
            </div>
            <div class="mb-3">
                <label for="pokemon-element" class="form-label">Element:</label>
                <input type="text" class="form-control" id="pokemon-element" name="element">
            </div>
            <div class="mb-3">
                <label for="pokemon-image" class="form-label">Image url:</label>
                <input type="text" class="form-control" id="pokemon-image" name="image">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Create new pokemon
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset fields
                </button>
            </div>
        </form>
    </div>
</section>
@endsection




