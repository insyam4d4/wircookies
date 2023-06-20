<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item {{ Route::is('console.dashboard*') ? 'selected' : null }}"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('console.dashboard') }}" aria-expanded="false"><i
                            class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item {{ Route::is('console.menu-category*') ? 'selected' : null }}"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('console.menu-category.index') }}" aria-expanded="false"><i
                            class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu">Menu
                            Category</span></a></li>
                <li
                    class="sidebar-item {{ Route::is('console.menu*') && !Route::is('console.menu-category*') ? 'selected' : null }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('console.menu.index') }}" aria-expanded="false"><i
                            class="mdi mdi-food-fork-drink"></i><span class="hide-menu">Menu</span></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
