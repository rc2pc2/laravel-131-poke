@extends("layouts.app")

@section("page-title", $environment["name"])

@section("main-content")
<section class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1>
                {{  $environment["name"] }} Page
            </h1>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-12 card m-3">
            <img src="{{  $environment["image"] }}" alt="" class="w-25">
            <ul>
                <li>
                    Name: {{ $environment["name"] }}
                </li>
                <li>
                    Element: {{ $environment["element"] }}
                </li>
                <li>
                    Walking speed: {{ $environment["walking_speed"] }}
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection




