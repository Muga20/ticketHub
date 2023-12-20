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

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Create Category Form </h4>

                                @if (Session::has('status'))
                                    <div class="alert alert-success">
                                        {{ Session::get('status') }}
                                    </div>
                                @endif

                                <form class="forms-sample" action="{{ route('storeCategory') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputName1">Category Name </label>
                                        <input id="exampleInputName1" type="text" class="form-control" 
                                         placeholder="_ _" name="name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Cover Photo For Your Category</label>
                                        <input type="file" name="image" class="form-control-file"
                                            id="exampleFormControlFile1">
                                    </div>

                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror


                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
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
