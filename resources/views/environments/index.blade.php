@extends("layouts.app")

@section("page-title", "Environment Index")

@section("main-content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Environment list:
                </h1>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <a href="{{ route("environment.create") }}" class="btn btn-primary btn-lg">
                        Create new environment
                    </a>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Element</th>
                            <th scope="col">Walking Speed</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $environments as $index => $environment )
                        <tr>
                            <td>
                                {{ $environment->id }}
                            </td>
                            <td>
                                {{ $environment->name }}
                            </td>
                            <td>
                                {{ $environment->element }}
                            </td>
                            <td>
                                {{ $environment->walking_speed }}
                            </td>
                            <td>
                                <img src="{{ $environment->image }}" alt="" height="20" width="20">
                            </td>
                            <td>
                                <a href="{{ route("environment.show", $environment) }}" class="btn btn-sm btn-primary me-2">Show</a>
                                <a href="{{ route("environment.edit", $environment->id) }}"  class="btn btn-sm btn-success me-2">Edit</a>

                                <form class="d-inline env-destroyer" action="{{ route("environment.delete", $environment->id) }}" method="POST" custom-data-name="{{ $environment->name }}" >
                                    @method("DELETE")
                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-warning me-2">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No environment are available at the moment...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section("additional-scripts")
    @vite("resources/js/environments/delete-confirmation.js");
@endsection
