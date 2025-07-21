<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset_url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            @php
                $admin = Auth::user();
            @endphp
          <p>{{ $admin->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        {{-- <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li> --}}



        <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>User Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/users') }}"><i class="fa fa-circle-o"></i> All Users</a></li>
              <li><a href="{{ route('admin.users.create') }}"><i class="fa fa-circle-o"></i> Create User</a></li>
              <li><a href="{{ route('admin.kyc.index') }}"><i class="fa fa-circle-o"></i> Kyc User</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Plan Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/plans') }}"><i class="fa fa-circle-o"></i> All Plans</a></li>
              <li><a href="{{ route('admin.plans.create') }}"><i class="fa fa-circle-o"></i> Create Plans</a></li>
              <li><a href="{{ route('admin.history.create') }}"><i class="fa fa-circle-o"></i> Create Investment History</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Copy Expert</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/copy') }}"><i class="fa fa-circle-o"></i> All Copy Expert</a></li>
              <li><a href="{{ route('admin.copy.create') }}"><i class="fa fa-circle-o"></i> Create Copy Expert</a></li>
            </ul>
          </li>



        <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Deposits</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/all-deposit') }}"><i class="fa fa-circle-o"></i> Completed Deposits</a></li>
              <li><a href="{{ url('admin/all-deposit-pending') }}"><i class="fa fa-circle-o"></i> Pending Deposits</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Withdrawal</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/all-withdraw') }}"><i class="fa fa-circle-o"></i> Completed Withdrawal</a></li>
              <li><a href="{{ url('admin/all-withdraw-pending') }}"><i class="fa fa-circle-o"></i> Pending Withdrawal</a></li>
            </ul>
          </li>

          <li><a href="{{ url('admin/transactions') }}"><i class="fa fa-book"></i> <span>All Investments</span></a></li>


        <li class="header">Account & Settings</li>



        {{-- <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>My Profile</span></a></li> --}}
        <li><a href="{{ url('admin/settings') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Settings</span></a></li>
        <li><a href="{{ url('admin/payments') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Payments</span></a></li>
        <li><a href="{{ url('admin/smtp') }}"><i class="fa fa-circle-o text-aqua"></i> <span>SMTP</span></a></li>

        <li><a href="{{ route('admin.profile.index') }}"><i class="fa fa-book"></i> <span>Edit Profile</span></a></li>

        <li><a href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a>

            <form id="logout-form" method="POST" action="{{ route('logout') }}"
            style="display: none;">
            @csrf
        </form>
    </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
