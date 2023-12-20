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
                    <div class="col-lg-12 d-flex grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <h4 class="card-title mb-3">
                                        Tomorow Blogs User Panel </h4>
                                </div>

                                <div class="">
                                    <img src="/img/logo-image.png" class="" alt="logo "
                                        style="witdth:500px ; height: 300px" />

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
