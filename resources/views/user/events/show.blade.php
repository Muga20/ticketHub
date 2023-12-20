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
                                <h4 class="card-title">Events Table </h4>
                                <p class="card-description">

                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Event Title</th>
                                                <th>Event Image</th>
                                                <th>Category</th>
                                                <th>Age</th>
                                                <th>Price</th>
                                                <th>Location</th>
                                                <th>Host</th>
                                                <th>Slots</th>
                                                <th>Tags</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($events as $event)
                                                <tr>
                                                    <td>{{ $event->title }}</td>
                                                    <td>
                                                        <img src="{{ asset($event->image) }}" alt="Event Image"
                                                            class="img-fluid" style="max-width: 100px;">
                                                    </td>
                                                    <td>{{ $event->category->name }}</td>
                                                    <td>{{ $event->age }}</td>
                                                    <td>ksh{{ $event->price }}</td>
                                                    <td>{{ $event->location }}</td>
                                                    <td>{{ $event->host }}</td>
                                                    <td>{{ $event->slots }}</td>
                                                    <td>{{ $event->tag->name }}</td>


                                                    <td>
                                                        @if (auth()->user()->id === $event->user_id)
                                                            <button type="button" class="btn btn-secondary more-btn"
                                                                data-toggle="modal"
                                                                data-target="#moreOptions_{{ $event->id }}">
                                                                More
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade"
                                                                id="moreOptions_{{ $event->id }}" tabindex="-1"
                                                                role="dialog" aria-labelledby="moreOptionsLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="moreOptionsLabel">Options</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="dropdown-item">
                                                                                <a href="{{ route('editEvents', $event) }}"
                                                                                    class="btn btn-secondary">Edit</a>
                                                                            </div>
                                                                            <form
                                                                                action="{{ route('deleteEvents', $event) }}"
                                                                                method="POST" class="dropdown-item">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger">Delete</button>
                                                                            </form>
                                                                            <form
                                                                                action="{{ route('addToSlide', $event->id) }}"
                                                                                method="POST" class="dropdown-item">
                                                                                @csrf

                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Add To
                                                                                    Slider</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
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
