@extends("layouts.app")

@section("page-title", "Environment Index")

@section("main-content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Deleted environments list:
                </h1>
            </div>
            <div class="col-12">
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
                                <form class="d-inline me-2"
                                    action="{{ route("environment.restore", $environment->id) }}"
                                    method="POST">
                                    @method("PATCH")
                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-success me-2">
                                        Restore
                                    </button>
                                </form>


                                <form class="d-inline env-destroyer" action="{{ route("environment.permanent-delete", $environment->id) }}" method="POST" custom-data-name="{{ $environment->name }}" >
                                    @method("DELETE")
                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-warning me-2">
                                        Permanent Delete
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
