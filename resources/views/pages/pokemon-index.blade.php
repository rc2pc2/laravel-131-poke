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
        @foreach ( $pokemons as $pokemon )
        <div class="col-3 card m-3">
            <ul>
                <li>
                    Nome: {{ $pokemon["name"] }}
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
        </div>
        @endforeach
    </div>
</section>
@endsection




