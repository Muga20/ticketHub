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
                                <h4 class="card-title">Tickets Tracking  Table </h4>
                                <p class="card-description">

                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    For
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Phone
                                                </th>
                                                <th>
                                                    Date Purchased
                                                </th>
                                                <th>
                                                    Tickets
                                                </th>
                                                  <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Event
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($tags && count($tags) > 0)
                                                @foreach ($tags as $tag)
                                                    <tr>
                                                        <td>{{ $tag->name }}</td>
                                                        <td>{{ $tag->name }}</td>
                                                        <td>{{ $tag->name }}</td>
                                                        <td>{{ $tag->created_at->diffForHumans() }}</td>
                                                        <td>5</td>
                                                         <td>{{ $tag->name }}</td>
                                                        <td>{{ $tag->name }}</td>

                                                        <td>
                                                            @if (auth()->user()->id === $tag->user_id)
                                                                <button type="button"
                                                                    class="btn btn-secondary more-btn"
                                                                    data-toggle="modal"
                                                                    data-target="#moreOptions_{{ $tag->id }}">
                                                                    More
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade"
                                                                    id="moreOptions_{{ $tag->id }}" tabindex="-1"
                                                                    role="dialog" aria-labelledby="moreOptionsLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="moreOptionsLabel">Options</h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="dropdown-item">
                                                                                    <a href="{{ route('editTag', $tag) }}"
                                                                                        class="btn btn-secondary">Contact The Client </a>
                                                                                </div>
                                                                                <form
                                                                                    action="{{ route('deleteTag', $tag) }}"
                                                                                    method="POST"
                                                                                    class="dropdown-item">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger">Delete</button>
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            @else
                                                <p>No tags found!</p>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Your existing HTML content -->

                                <!-- Pagination -->
                                <div class="text-center">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item @if ($tags->previousPageUrl() == null) disabled @endif">
                                                <a class="page-link" href="{{ $tags->previousPageUrl() }}"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            @for ($i = 1; $i <= $tags->lastPage(); $i++)
                                                <li class="page-item @if ($i === $tags->currentPage()) active @endif">
                                                    <a class="page-link"
                                                        href="{{ $tags->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                            <li class="page-item @if ($tags->nextPageUrl() == null) disabled @endif">
                                                <a class="page-link" href="{{ $tags->nextPageUrl() }}"
                                                    aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
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
