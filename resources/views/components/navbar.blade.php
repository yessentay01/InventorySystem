<nav class="nav">
    <div>
        <a href="#" class="nav_logo">
            <i class='bx bx-layer nav_logo-icon'></i>
            <span class="nav_logo-name">IITU</span>
        </a>
        <div class="nav_list">

            <a href="{{ route('dashboard') }}" class="nav_link {{Route::currentRouteName() == 'dashboard' ? 'active' : null  }}">
                <i class='bx bx-grid-alt nav_icon'></i>
                <span class="nav_name">Dashboard</span>
            </a>
            <a href="{{ route('catalog') }}" class="nav_link {{Route::currentRouteName() == 'catalog' ? 'active' : null  }}">
                <i class='bx bx-bookmark nav_icon'></i>
                <span class="nav_name">Catalog</span>
            </a>
            @if(!auth()->user()->is_admin)
            <a href="{{ route('favorites') }}" class="nav_link {{Route::currentRouteName() == 'favorites' ? 'active' : null  }}">
                <i class='bx bx-folder nav_icon'></i>
                <span class="nav_name">Favorites</span>
            </a>
            @endif
            <a href="{{ route('profile') }}" class="nav_link {{Route::currentRouteName() == 'profile' ? 'active' : null  }}">
                <i class='bx bx-user  nav_icon'></i>
                <span class="nav_name">Profile</span>
            </a>
            @if(auth()->user()->is_admin)
            <a  href="{{ route('borrower') }}"  class="nav_link {{Route::currentRouteName() == 'borrower' ? 'active' : null  }}">
                <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                <span class="nav_name">Borrower</span>
            </a>
            <a href="{{ route('item') }}" class="nav_link {{Route::currentRouteName() == 'item' ? 'active' : null  }}">
                <i class='bx bx-notepad  nav_icon'></i>
                <span class="nav_name">Books</span>
            </a>
            <a href="{{ route('supplier') }}" class="nav_link {{Route::currentRouteName() == 'supplier' ? 'active' : null  }}">
                <i class='bx bx-message-square-detail nav_icon'></i>
                <span class="nav_name">Suppliers</span>
            </a>
            <a href="{{ route('category') }}" class="nav_link {{Route::currentRouteName() == 'category' ? 'active' : null  }}">
                <i class='bx bx-bookmark nav_icon'></i>
                <span class="nav_name">Category</span>
            </a>
            <a href="{{ route('department') }}" class="nav_link {{Route::currentRouteName() == 'department' ? 'active' : null  }}">
                <i class='bx bx-folder nav_icon'></i>
                <span class="nav_name">Department</span>
            </a>
            @endif
        </div>
    </div>
    <a  href="{{ route('logout') }}" class="nav_link">
        <i class='bx bx-log-out nav_icon'></i>
        <span class="nav_name">SignOut</span>
    </a>
</nav>
