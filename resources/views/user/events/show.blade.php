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
                                <h4 class="card-title">Blogs Table </h4>
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
                                                    <td>${{ $event->price }}</td>
                                                    <td>{{ $event->location }}</td>
                                                    <td>{{ $event->host }}</td>
                                                    <td>{{ $event->slots }}</td>
                                                    <td>{{ $event->tag->name }}</td>
                                                    <td>
                                                        @if (auth()->user()->id === $event->user_id)
                                                            <div class="btn-group" role="group">
                                                                <a href="{{ route('editEvents', $event) }}"
                                                                    class="btn btn-secondary">Edit</a>
                                                                <form action="{{ route('deleteEvents', $event) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
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
