@extends("layouts.app")

@section("page-title", "Editing " . $pokemon->name)

@section("main-content")
<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("pokemon.update", $pokemon->id) }}">
            @method("PUT")
            @csrf

            {{-- @dump($pokemon) --}}
            <h1 class="mb-3">
                Editing {{ $pokemon->name }}:
            </h1>
            <div class="mb-3">
                <label for="pokemon-name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="pokemon-name" name="name" value="{{ $pokemon->name }}">
            </div>
            <div class="mb-3">
                <label for="pokemon-species" class="form-label">Species:</label>
                <input type="text" class="form-control" id="pokemon-species" name="species"
                value="{{ $pokemon->species }}">
            </div>
            <div class="mb-3">
                <label for="pokemon-ability" class="form-label">Ability:</label>
                <input type="text" class="form-control" id="pokemon-ability" name="ability"
                value="{{ $pokemon->ability }}">
            </div>
            <div class="mb-3">
                <label for="pokemon-element" class="form-label">Element:</label>
                <input type="text" class="form-control" id="pokemon-element" name="element"
                value="{{ $pokemon->element }}">
            </div>
            <div class="mb-3">
                <label for="pokemon-image" class="form-label">Image url:</label>
                <input type="text" class="form-control" id="pokemon-image" name="image"
                value="{{ $pokemon->image }}">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-success me-3">
                    Editing {{ $pokemon->name }}
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset fields
                </button>
            </div>
        </form>
    </div>
</section>
@endsection




