
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('AdminHome')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Services</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('AdminHome')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-list-alt"></i>
                    <span>Categpries</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('categories.index')}}">All Category</a>
                        <a class="collapse-item" href="{{route('categories.create')}}">Add Category</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Portfolios"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-briefcase"></i>
                    <span>Portfolios</span>
                </a>
                <div id="Portfolios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('portfolios.index')}}">All Portfolio</a>
                        <a class="collapse-item" href="{{route('portfolios.create')}}">Add Portfolio</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Generals"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-briefcase"></i>
                    <span>Service</span>
                </a>
                <div id="Generals" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('generals.index')}}">All Service</a>
                        <a class="collapse-item" href="{{route('generals.create')}}">Add Service</a>
                    </div>
                </div>
            </li>

        </ul>
        <!-- End of Sidebar -->
