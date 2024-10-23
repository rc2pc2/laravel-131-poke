@extends("layouts.app")

@section("page-title", $pokemon["name"])

@section("main-content")
<section class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1>
                {{  $pokemon["name"] }} Page
            </h1>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-12 card m-3">
            <img src="{{  $pokemon["image"] }}" alt="" class="w-25">
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



            </ul>
        </div>
    </div>
</section>
@endsection




