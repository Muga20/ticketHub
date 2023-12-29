   <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <ul class="nav">
           <li class="nav-item">
               <div class="d-flex sidebar-profile">
                   <div class="sidebar-profile-image">
                       <img src="{{ Auth::user()->image }}" alt="image">
                       <span class="sidebar-status-indicator"></span>
                   </div>
                   <div class="sidebar-profile-name">

                           <p class="sidebar-name">
                               TicketHub
                           </p>
                    
                       @php
                           $currentTime = \Carbon\Carbon::now();
                           $greeting = '';
                           if ($currentTime->hour >= 5 && $currentTime->hour < 12) {
                               $greeting = 'Good Morning';
                           } elseif ($currentTime->hour >= 12 && $currentTime->hour < 18) {
                               $greeting = 'Good Afternoon';
                           } else {
                               $greeting = 'Good Evening';
                           }
                       @endphp

                       <p class="sidebar-designation">
                           {{ $greeting }}
                       </p>
                   </div>
               </div>
               <div class="nav-search">
                   <div class="input-group">
                       <input type="text" class="form-control" placeholder="Type to search..." aria-label="search"
                           aria-describedby="search">
                       <div class="input-group-append">
                           <span class="input-group-text" id="search">
                               <i class="typcn typcn-zoom"></i>
                           </span>
                       </div>
                   </div>
               </div>
               <p class="sidebar-menu-title">Dash menu</p>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="/dashboard">
                   {{-- <i class="typcn typcn-device-desktop menu-icon"></i> --}}
                   <span class="menu-title"> Dashboard </span>
               </a>
           </li>

            <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#form-elements-order" aria-expanded="false"
                   aria-controls="form-elements">
                   {{-- <i class="typcn typcn-film menu-icon"></i> --}}
                   <span class="menu-title">Ticket Oeder</span>
                   <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="form-elements-order">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item"><a class="nav-link" href="/order"> Show </a></li>
                      
                   </ul>
               </div>
           </li>

           <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                   aria-controls="ui-basic">
                   {{-- <i class="typcn typcn-briefcase menu-icon"></i> --}}
                   <span class="menu-title">Category</span>
                   <i class="typcn typcn-chevron-right menu-arrow"></i>
               </a>
               <div class="collapse" id="ui-basic">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item"> <a class="nav-link" href="/createCategory">Create Category</a></li>
                       <li class="nav-item"> <a class="nav-link" href="/showCategory">Show Categories</a></li>

                   </ul>
               </div>
           </li>


            <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#ui-tags" aria-expanded="false"
                   aria-controls="ui-basic">
                   {{-- <i class="typcn typcn-briefcase menu-icon"></i> --}}
                   <span class="menu-title">Tags</span>
                   <i class="typcn typcn-chevron-right menu-arrow"></i>
               </a>
               <div class="collapse" id="ui-tags">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item"> <a class="nav-link" href="/createTag">Create Tags</a></li>
                       <li class="nav-item"> <a class="nav-link" href="/showTag">Show Tags</a></li>

                   </ul>
               </div>
           </li>


           <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                   aria-controls="form-elements">
                   {{-- <i class="typcn typcn-film menu-icon"></i> --}}
                   <span class="menu-title">Events</span>
                   <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="form-elements">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item"><a class="nav-link" href="createEvents">Create Events</a></li>
                       <li class="nav-item"><a class="nav-link" href="showEvents">Show Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="showEventsToSlide">Events on Slide </a></li>

                   </ul>
               </div>
           </li>



            <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#form-elements-profile" aria-expanded="false"
                   aria-controls="form-elements">
                   {{-- <i class="typcn typcn-film menu-icon"></i> --}}
                   <span class="menu-title">Profile</span>
                   <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="form-elements-profile">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item"><a class="nav-link" href="/profile">Edit Profile </a></li>
                       <li class="nav-item"><a class="nav-link" href="/profile-deactivate">Deactivate Acc  </a></li>
                   </ul>
               </div>
           </li>


          

          
     
   </nav>
