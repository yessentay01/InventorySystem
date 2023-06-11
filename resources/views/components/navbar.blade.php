<nav class="nav">
    <div>
        <a href="{{route('welcome')}}" class="nav_logo">
{{--            <i class='bx bx-layer nav_logo-icon'></i>--}}
            <img width="25" class='bx bx-layer nav_logo-icon' src="{{asset('images/iitu-logo2.png')}}" alt="">
            <span class="nav_logo-name">IITU</span>
        </a>
        <div class="nav_list">

            <a href="{{ route('dashboard') }}"
               class="nav_link {{Route::currentRouteName() == 'dashboard' ? 'active' : null  }}">
                <i class='bx bx-grid-alt nav_icon'></i>
                <span class="nav_name">Dashboard</span>
            </a>
            <a href="{{ route('catalog') }}"
               class="nav_link {{Route::currentRouteName() == 'catalog' ? 'active' : null  }}">
                <i class='bx bx-bookmark nav_icon'></i>
                <span class="nav_name">Catalog</span>
            </a>
            @if(!auth()->user()->is_admin)
                <a href="{{ route('favorites') }}"
                   class="nav_link {{Route::currentRouteName() == 'favorites' ? 'active' : null  }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m12.1 18.55l-.1.1l-.11-.1C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5c1.54 0 3.04 1 3.57 2.36h1.86C13.46 6 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5c0 2.89-3.14 5.74-7.9 10.05M16.5 3c-1.74 0-3.41.81-4.5 2.08C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.41 2 8.5c0 3.77 3.4 6.86 8.55 11.53L12 21.35l1.45-1.32C18.6 15.36 22 12.27 22 8.5C22 5.41 19.58 3 16.5 3Z"/></svg>  <span class="nav_name">Favorites</span>
                </a>
            @endif
            <a href="{{ route('profile') }}"
               class="nav_link {{Route::currentRouteName() == 'profile' ? 'active' : null  }}">
                <i class='bx bx-user  nav_icon'></i>
                <span class="nav_name">Profile</span>
            </a>
            @if(auth()->user()->is_admin)
                <a href="{{ route('borrower') }}"
                   class="nav_link {{Route::currentRouteName() == 'borrower' ? 'active' : null  }}">
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                    <span class="nav_name">Borrower</span>
                </a>
                <a href="{{ route('booking') }}"
                   class="nav_link {{Route::currentRouteName() == 'booking' ? 'active' : null  }}">
                    <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">Bookings</span>
                </a>
                <a href="{{ route('item') }}"
                   class="nav_link {{Route::currentRouteName() == 'item' ? 'active' : null  }}">
                    <i class='bx bx-notepad  nav_icon'></i>
                    <span class="nav_name">Books</span>
                </a>
                <a href="{{ route('supplier') }}"
                   class="nav_link {{Route::currentRouteName() == 'supplier' ? 'active' : null  }}">
                    <i class='bx bx-message-square-detail nav_icon'></i>
                    <span class="nav_name">Suppliers</span>
                </a>
                <a href="{{ route('category') }}"
                   class="nav_link {{Route::currentRouteName() == 'category' ? 'active' : null  }}">
                    <i class='bx bx-bookmark nav_icon'></i>
                    <span class="nav_name">Category</span>
                </a>
                <a href="{{ route('department') }}"
                   class="nav_link {{Route::currentRouteName() == 'department' ? 'active' : null  }}">
                    <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">Department</span>
                </a>
                <a href="{{ route('feedbackView') }}"
                   class="nav_link {{Route::currentRouteName() == 'feedbackView' ? 'active' : null  }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17l-.59.59l-.58.58V4h16v12zm-9-4h2v2h-2zm0-6h2v4h-2z"/></svg>
                    <span class="nav_name">Feedbacks</span>
                </a>
            @endif
        </div>
    </div>
    <a href="{{ route('logout') }}" class="nav_link">
        <i class='bx bx-log-out nav_icon'></i>
        <span class="nav_name">SignOut</span>
    </a>
</nav>
