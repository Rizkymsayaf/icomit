<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
       <li class="nav-item">
       <li>
            <a class="nav-link  {{ Request::is('dashboard/index*')? 'active' : '' }}" href="/dashboard/index">
              <span data-feather="user"></span>
              dashboard
            </a>
          </li>
        @can('admin')
        <ul>
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard/pengasuh*')? 'active' : '' }}" href="/dashboard/pengasuh">
            <span data-feather="users"></span>
            Contoh Admin
          </a>
        </li>
    </ul>
    @endcan
        <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/kebutuhan*')? 'active' : '' }}" href="/dashboard/kebutuhan">
              <span data-feather="box"></span>
              Contoh User
            </a>
          </li>

    </div>
  </nav>
