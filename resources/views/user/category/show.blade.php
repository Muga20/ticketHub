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
                                <h4 class="card-title">Category Table </h4>
                                <p class="card-description">

                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                               <th>
                                                    Category Name
                                                </th>
                                                <th>
                                                    Category Image
                                                </th>
                                               
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->name }}</td>
                                                     <td class="py-1">
                                                        <img src="{{ asset($category->image) }}" alt="image" />
                                                    </td>
                                                  
                                                    <td>
                                                        @if (auth()->user()->id === $category->user_id)
                                                            <button type="button" class="btn btn-secondary more-btn"
                                                                data-toggle="modal"
                                                                data-target="#moreOptions_{{ $category->id }}">
                                                                More
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade"
                                                                id="moreOptions_{{ $category->id }}" tabindex="-1"
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
                                                                                <a href="{{ route('editCategory', $category) }}"
                                                                                    class="btn btn-secondary">Edit</a>
                                                                            </div>
                                                                            <form
                                                                                action="{{ route('deleteCategory', $category) }}"
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
                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Your existing HTML content -->

                                <!-- Pagination -->
                                <div class="text-center">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item @if ($categories->previousPageUrl() == null) disabled @endif">
                                                <a class="page-link" href="{{ $categories->previousPageUrl() }}"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            @for ($i = 1; $i <= $categories->lastPage(); $i++)
                                                <li class="page-item @if ($i === $categories->currentPage()) active @endif">
                                                    <a class="page-link"
                                                        href="{{ $categories->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                            <li class="page-item @if ($categories->nextPageUrl() == null) disabled @endif">
                                                <a class="page-link" href="{{ $categories->nextPageUrl() }}"
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
