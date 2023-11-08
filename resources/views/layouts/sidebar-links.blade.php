<li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-book"></i>
      <p>
      @yield('sidebar link name')
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="pages/examples/invoice.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Create</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/examples/invoice.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>View All</p>
        </a>
    </li>
    </ul>
  </li>
@yield('sidebar')
