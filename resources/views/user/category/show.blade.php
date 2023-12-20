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
                                                    Category Image
                                                </th>
                                                <th>
                                                    Time Created
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach ($categories as $category)
                                            <tbody>
                                                <tr>
                                                    <td class="py-1">
                                                        <img src="{{ asset($category->image) }}" alt="image" />
                                                    </td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->created_at->diffForHumans() }}</td>
                                                    <td class="d-flex">

                                                        <button type="button" class="btn btn-secondary ">
                                                            <a href="{{ route('editCategory', $category) }}">Edit
                                                                </>
                                                        </button>
                                                        <form
                                                            action="{{ route('deleteCategory', $category) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <input type="submit" class="btn btn-danger" value="Delete">
                                                        </form>
                                                    </td>

                                            </tbody>
                                        @endforeach
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

    
   @include("user.include.scripts")

</body>

</html>
