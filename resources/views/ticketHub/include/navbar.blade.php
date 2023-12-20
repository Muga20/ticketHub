@include('ticketHub.include.header')

<body class="rlr-body">
    <!-- Header -->
    <header>
        <nav id="navigation" class="navigation rlr-navigation default-nav fixed-top">
            <!-- Logo -->
            <div class="navigation-header">
                <div class="navigation-brand-text">
                    <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
                        <a href="/">
                            ticketHub
                        </a>
                    </div>
                </div>
                <div class="navigation-button-toggler">
                    <span class="rlr-sVGIcon"> <i class="rlr-icon-font rlr-icon-font--megamenu flaticon-menu"> </i>
                    </span>
                </div>
            </div>
            <div class="navigation-body rlr-navigation__body container">
                <div class="navigation-body-header rlr-navigation__body-header">
                    <div class="navigation-brand-text">
                        <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
                            <a href="/">
                                ticketHub
                            </a>
                        </div>
                    </div>
                    <span class="rlr-sVGIcon navigation-body-close-button"> <i
                            class="rlr-icon-font rlr-icon-font--megamenu flaticon-close"> </i> </span>
                </div>

                <!-- Main menu -->
                <ul class="navigation-menu rlr-navigation__menu rlr-navigation__menu--main-links">

                    <li class="navigation-item">
                        <a class="navigation-link" href="/"> Home </a>
                    </li>

                    <li class="navigation-item">
                        <a class="navigation-link" href="/event"> Events </a>

                    </li>

                    <li class="navigation-item">
                        <a class="navigation-link" href="/about"> About </a>
                    </li>
                    <li class="navigation-item">
                        <a class="navigation-link" href="./contact"> Contact </a>
                    </li>
                </ul>
                <!-- User actions menu -->
                <ul class="navigation-menu rlr-navigation__menu align-to-right">


                    <!-- User account dropdown -->
                    @auth
                        <li class="navigation-item">
                            <a class="navigation-link" href="#"> {{ Auth::user()->name }} </a>
                            <ul class="navigation-dropdown">
                                <li class="navigation-dropdown-item">
                                    <a class="navigation-dropdown-link" href="/dashboard">Profile</a>
                                </li>
                                <li class="navigation-dropdown-item">
                                    <hr class="dropdown-divider rlr-dropdown__divider" />
                                </li>
                            </ul>
                        </li>
                    @endauth

                </ul>
            </div>
        </nav>
    </header>
    <!-- Main Content -->
