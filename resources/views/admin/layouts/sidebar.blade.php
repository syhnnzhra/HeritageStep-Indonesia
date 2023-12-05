    <div class="sidebar uk-padding-remove-left">
        <div class="logo-content">
            <div class="logo uk-padding">
                <div class="logo-name">HeritageStep</div>
            </div>
            <i class="bx bx-menu" id="toggleMenu"></i>
        </div>
        <ul class="nav-list">
            <!-- <li class="nav-item">
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search . . ." class="sidebar-search">
                <span class="tooltip">Search</span>
            </li> -->
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="bx bx-grid-alt"></i> <span class="nav-name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li class="nav-item">
                <a href="/order" class="nav-link">
                    <i class="bx bx-chat "></i> <span class="nav-name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li class="nav-item">
                <a href="/product" class="nav-link">
                    <i class="bx bx-pie-chart-alt-2"></i> <span class="nav-name">Product</span>
                </a>
                <span class="tooltip">Product</span>
            </li>
            <li class="nav-item">
                <a href="/customer" class="nav-link">
                    <i class="bx bx-user"></i> <span class="nav-name">Customer</span>
                </a>
                <span class="tooltip">Customer</span>
            </li>
        </ul>
        <div class="profile-content">
            <div class="profile">
                <div class="profile-details">
                    <img src="assets/images/user.png" alt="Profile" class="profile-image">
                    <div class="name-job">
                        <div class="name">CraftCode Collective</div>
                        <div class="job">Admin</div>
                    </div>
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"> <i class="bx bx-log-out" id="logout"></i></button>
                </form>
                
            </div>
        </div>
    </div>
