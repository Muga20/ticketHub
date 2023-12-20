<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

        <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
            data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item dropdown  d-flex">


                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                    id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="typcn typcn-bell mr-0"></i>
                    <span class="count bg-danger">2</span>
                </a>



                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>

                    <a href="" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="typcn typcn-info-large mx-0"></i>
                            </div>
                        </div>

                        <div class="preview-item-content">
                            <h4 class="preview-subject font-weight-normal"> Messages </h4>
                            <p class="font-weight-light small-text mb-0">
                                Just now
                            </p>
                        </div>
                    </a>

                </div>


            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown"
                    id="profileDropdown">


                    <p class="sidebar-name">
                        <span class="nav-profile-name"> {{ Auth::user()->name }}</span>
                    </p>


                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="typcn typcn-power text-primary"></i>
                            Logout
                        </button>
                    </form>

                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>

</nav>
