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
                                <h4 class="card-title">Tickets Tracking Table </h4>
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
                                                    Status
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($oder as $item)
                                                <tr>
                                                    <td>{{ $item->first_name }}</td>
                                                    <td>
                                                        @php
                                                            $email = $item->email;
                                                            $emailParts = explode('@', $email);
                                                            $truncatedEmail = $email;

                                                            if (count($emailParts) === 2) {
                                                                $username = $emailParts[0];
                                                                $domain = $emailParts[1];
                                                                $truncatedUsername = strlen($username) > 5 ? substr($username, 0, 3) . '...' . substr($username, -2) : $username;
                                                                $truncatedEmail = $truncatedUsername . '@' . $domain;
                                                            }
                                                        @endphp

                                                        <span title="{{ $email }}">{{ $truncatedEmail }}</span>
                                                    </td>

                                                    </td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($item->order_date)->diffForHumans() }}
                                                    </td>

                                                    <td>{{ $item->numberOfTickets }}</td>
                                                    <td>{{ $item->total_amount }}</td>
                                                    <td>{{ $item->event->title }}</td>
                                                    <td>{{ $item->status }}</td>

                                                    <td>
                                                        <button type="button" class="btn btn-secondary more-btn"
                                                            data-toggle="modal"
                                                            data-target="#moreOptions_{{ $item->id }}">
                                                            More
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="moreOptions_{{ $item->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="moreOptionsLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="moreOptionsLabel">
                                                                            Options</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="dropdown-item">
                                                                            <a href="mailto:{{ $item->email }}"
                                                                                class="btn btn-secondary">Contact The
                                                                                Client</a>
                                                                        </div>

                                                                        <form
                                                                            action="{{ route('deleteOrder', $item) }}"
                                                                            method="POST" class="dropdown-item">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>


                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="text-center">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item @if ($oder->previousPageUrl() == null) disabled @endif">
                                                <a class="page-link" href="{{ $oder->previousPageUrl() }}"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            @for ($i = 1; $i <= $oder->lastPage(); $i++)
                                                <li class="page-item @if ($i === $oder->currentPage()) active @endif">
                                                    <a class="page-link"
                                                        href="{{ $oder->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                            <li class="page-item @if ($oder->nextPageUrl() == null) disabled @endif">
                                                <a class="page-link" href="{{ $oder->nextPageUrl() }}"
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
