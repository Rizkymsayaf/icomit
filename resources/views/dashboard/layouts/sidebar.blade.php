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
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('subjects/index*')? 'active' : '' }}" href="/subjects/index">
            <span data-feather="users"></span>
            Mata Pelajaran
          </a>
        </li>
    @endcan
       @can('admin')
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('subjects/index*')? 'active' : '' }}" href="/subjects/index">
            <span data-feather="users"></span>
           Membuat Soal
          </a>
        </li>

    @endcan

        <li class="nav-item">
          <a class="nav-link  {{ Request::is('subjects/index*')? 'active' : '' }}" href="/subjects/index">
            <span data-feather="users"></span>
            menjawab soal
          </a>
        </li>

    </div>
  </nav>
