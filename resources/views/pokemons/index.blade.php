@extends("layouts.app")

@section("page-title", "Pokemon Index")

@section("main-content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Pokemon list:
                </h1>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <a href="{{ route("pokemon.create") }}" class="btn btn-primary btn-lg">
                        Create new pokemon
                    </a>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Species</th>
                            <th scope="col">Ability</th>
                            <th scope="col">Element</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $pokemons as $index => $pokemon )
                        <tr>
                            <td>
                                {{ $pokemon->id }}
                            </td>
                            <td>
                                {{ $pokemon->name }}
                            </td>
                            <td>
                                {{ $pokemon->species }}
                            </td>
                            <td>
                                {{ $pokemon->ability }}
                            </td>
                            <td>
                                {{ $pokemon->element }}
                            </td>
                            <td>
                                <a href="{{ route("pokemon.show", $pokemon->id) }}" class="btn btn-sm btn-primary me-2">Show</a>
                                <a href="{{ route("pokemon.edit", $pokemon->id) }}" class="btn btn-sm btn-success me-2">Edit</a>
                                <form action="{{ route("pokemon.delete", $pokemon->id) }}" method="POST" class="d-inline pokemon-destroyer" custom-data-name="{{ $pokemon->name }}">
                                    @csrf
                                    @method("DELETE")

                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No pokemon are available at the moment...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section("additional-scripts")
    @vite("resources/js/pokemons/delete-confirmation.js")
@endsection
