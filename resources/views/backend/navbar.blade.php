<nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/admin/homeAdmin') }}" class="nav-link">Home</a>
        </li>
      </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Right Side Of Navbar-->
        <li class="nav-tem">
            <!-- Authentication Links -->
              <li class="dropdown">
                  @if (Auth::guest())
                      <li>Vous etes déconnecté</li>
                  @else
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false"><i class="nav-icon fas fa-user"></i>
                            <span class="caret"></span> {{ Auth::user()->prenom }} {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            {!! link_to_route('admin.show', 'Profil', [Auth::user()->id], ['class' => 'dropdown-item ']) !!}
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/admin/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
               @endif
              </li>
           </ul>
  </nav>