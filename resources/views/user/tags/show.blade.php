<!DOCTYPE html>
<html lang="en">
@include('user.include.header')

<body>

    <div class="container-scroller">

        @include('user.layouts.nav')
        @include('user.layouts.skin')
        @include('user.layouts.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">


                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Categories List </h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Category Name
                                                </th>
                                                <th>
                                                    Time Created
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        @if ($tags && count($tags) > 0)
                                            @foreach ($tags as $tag)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $tag->name }}</td>
                                                        <td>{{ $tag->created_at->diffForHumans() }}</td>
                                                        <td class="d-flex">
                                                            <button type="button" class="btn btn-secondary ">
                                                                <a href="{{ route('editTag', $tag) }}">Edit</a>
                                                            </button>
                                                            <form action="{{ route('deleteTag', $tag) }}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <input type="submit" class="btn btn-danger"
                                                                    value="Delete">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        @else
                                            <p>No tags found!</p>
                                        @endif

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>


    @include('user.include.scripts')

</body>

</html>
