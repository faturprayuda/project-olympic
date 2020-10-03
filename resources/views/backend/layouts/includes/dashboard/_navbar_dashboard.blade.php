<div class="main-header">
  <div style="width: 150px; height: 50px">
    @include('backend.layouts.includes._img_logo')
  </div>

  <div class="menu-toggle">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <div style="margin: auto"></div>

  <div class="header-part-right">

    <!-- User avatar dropdown -->
    <div class="dropdown">
      <div class="user col align-self-end">
        <img src="{{asset('backend/assets/images/faces/trilogi.png')}}" id="userDropdown" alt="" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="dropdown-header">
            <i class="i-Lock-User mr-1"></i> {{Auth::user()->email}}
          </div>
          <a class="dropdown-item" href="{{ route('signout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Sign out') }}
          </a>

          <form id="logout-form" action="{{ route('signout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

</div>