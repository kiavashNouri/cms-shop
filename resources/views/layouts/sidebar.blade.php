<aside class="main-sidebar bg-white">

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div class="pt-5">
            <img src="/img/images/logo.svg" alt="AdminLTE Logo"
                 style="opacity: .8" class="w-75 d-block mx-auto">
        </div>
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <!-- Sidebar Menu -->
            <form action="{{route('logout')}}" method="post" id="logout">
                @csrf
            </form>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column main-sidebar-right" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('user.activity')}}" class="nav-link {{isUrl(route('user.activity'),'active')}}">
                            <i class="nav-icon fa fa-home"></i>
                            <span>خلاصه فعالیت شما</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.full.activity')}}" class="nav-link {{isUrl(route('user.full.activity'),'active')}}">
                            <i class="nav-icon fa fa-shopping-bag"></i>
                            <span>سفارش ها</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.favorites.lists')}}" class="nav-link {{isUrl(route('user.favorites.lists'),'active')}}">
                            <i class="nav-icon fa fa-heart" aria-hidden="true"></i>
                            <span>لیست های من</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pending.to.comment')}}" class="nav-link {{isUrl(route('pending.to.comment'),'active')}}">
                            <i class="nav-icon fa fa-comment-alt" aria-hidden="true"></i>
                            <span>دیدگاه ها</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.addresses')}}" class="nav-link {{isUrl(route('user.addresses'),'active')}}">
                            <i class="nav-icon fa fa-address-card" aria-hidden="true"></i>
                            <span>آدرس ها</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.notifications')}}" class="nav-link {{isUrl(route('user.notifications'),'active')}}">
                            <i class="nav-icon fa fa-bell" aria-hidden="true"></i>
                            <span>اعلانات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('profile')}}" class="nav-link {{isUrl(route('profile'),'active')}}">
                            <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                            <span>پروفایل</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <button onclick=document.getElementById("logout").submit(); class="nav-link">
                            <i class="nav-icon fa fa-sign-out" aria-hidden="true"></i>
                            <span>خروج</span>
                        </button>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
