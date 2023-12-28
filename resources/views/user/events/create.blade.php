<!DOCTYPE html>
<html lang="en">
@include('user.include.header')

<style>
    .drop-area {
        border: 2px dashed #ccc;
        padding: 20px;
        text-align: center;
        cursor: pointer;
    }

    .highlight {
        background-color: #f0f0f0;
    }
</style>

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
                                <h4 class="card-title">Create Events Form </h4>

                                @if (Session::has('status'))
                                    <div class="alert alert-success">
                                        {{ Session::get('status') }}
                                    </div>
                                @endif

                                <form id="blogForm" class="forms-sample" action="{{ route('storeEvents') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="section">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Title</label>
                                            <input type="text" name="title" class="form-control"
                                                id="exampleInputName1" placeholder="Title" value="{{ old('title') }}">

                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputSlots">Date of the event </label>
                                            <input type="date" name="date" class="form-control"
                                                id="exampleInputSlots" value="{{ old('date') }}" placeholder="Date">

                                            @error('date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="section" style="display: none;">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Category</label>
                                            <select class="form-control" name="category_id" id="exampleSelectGender">
                                                <option selected disabled>Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                                <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender"> Tags </label>
                                            <select class="form-control" name="tag_id" id="exampleSelectGender">
                                                <option selected disabled>Select Tag</option>

                                                @if ($tags && count($tags) > 0)
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}">{{ $tag->name }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="" disabled> No tags available Create </option>
                                                @endif
                                            </select>

                                            @error('tag_id')
                                                <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Age required </label>
                                            <select class="form-control" name="age" id="exampleSelectGender">
                                                <option selected disabled>Select Age</option>
                                                @foreach ($ageRanges as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>

                                            @error('age')
                                                <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="section" style="display: none;">

                                        <div class="form-group">
                                            <label for="exampleInputName1">Price</label>
                                            <input type="number" name="price" class="form-control"
                                                id="exampleInputName1" placeholder="Price Regular" value="{{ old('price') }}">

                                            @error('price')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputName1">Location</label>
                                            <input type="text" name="location" class="form-control"
                                                id="exampleInputName1" placeholder="Location"
                                                value="{{ old('location') }}">

                                            @error('location')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputName1">Host</label>
                                            <input type="text" name="host" class="form-control"
                                                id="exampleInputName1" placeholder="Host" value="{{ old('host') }}">

                                            @error('host')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputName1">Slots</label>
                                            <input type="number" name="slots" class="form-control"
                                                id="exampleInputName1" placeholder="Slots" value="{{ old('slots') }}">

                                            @error('slots')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="section" style="display: none;">
                                        <div class="form-group">
                                            <label for="imageUpload">File upload</label>

                                            <div id="dropArea" class="drop-area">

                                                <input type="file" class="file-input visually-hidden"
                                                   name="image[]" id="imageUpload" value="{{ old('image') }}" multiple>
                                                <label for="imageUpload" class="custom-file-upload">
                                                    <i class="fas fa-cloud-upload-alt"></i> Choose File less than 1mb
                                                </label>
                                            </div>

                                            @error('image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>



                                    <div class="section" style="display: none;">
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Write Your Content Here</label>
                                            <textarea class="form-control" id="description" name="description" id="exampleTextarea1" rows="5"
                                                value="{{ old('description') }}"></textarea>

                                            @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div style="display: flex;">
                                        <button type="button" class="btn btn-primary mr-2"
                                            id="prevBtn">Previous</button>
                                        <button type="button" class="btn btn-primary mr-2"
                                            id="nextBtn">Next</button>
                                        <button type="submit" class="btn btn-primary mr-2" id="submitBtn"
                                            style="display: none;">Submit</button>
                                    </div>


                                </form>
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
