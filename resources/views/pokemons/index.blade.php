@extends("layouts.app")

@section("page-title", "Pokemon Index")

@section("main-content")
<section class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1>
                Pokemon index page
            </h1>
        </div>
    </div>
    <div class="row justify-content-around">
        {{-- ripeto questo elemento --}}
        @foreach ( $pokemons as $index => $pokemon )
        <div class="col-3 card m-3">
            <ul>
                <li>
                    <a href="{{ route("pokemons.show", $index) }}">
                        Nome: {{ $pokemon["name"] }}
                    </a>
                </li>
                <li>
                    Specie: {{ $pokemon["species"] }}
                </li>
                <li>
                    Abilita': {{ $pokemon["ability"] }}
                </li>
                <li>
                    Elemento: {{ $pokemon["element"] }}
                </li>
                <li>
                    Url immagine: {{ $pokemon["image"] }}
                </li>
            </ul>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#pokemon-modal-{{$index}}">
                Visualizza info
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pokemon-modal-{{$index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Nome: {{ $pokemon["name"] }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Specie: {{ $pokemon["species"] }}
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


@endsection




