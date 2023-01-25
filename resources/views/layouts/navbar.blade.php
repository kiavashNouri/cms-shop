<nav class="main-header navbar navbar-expand bg-white navbar-light" style="height: 92px">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link fw-bolder"> {{auth()->user()->name}} عزیز،بسیار زیاد خوش اومدی :)</a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto ml-5">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-comments-o"></i>
                <img src="/img/user1-128x128.jpg" alt="عکس پروفایل {{auth()->user()->name}}" class="rounded" width="47" height="47">
            </a>
            <div class="dropdown-menu-profile dropdown-menu dropdown-menu-lg dropdown-menu-left p-3">
                <div class="d-flex">
                    <img src="/img/user1-128x128.jpg" alt="عکس پروفایل {{auth()->user()->name}}" class="rounded-circle" width="40" height="40">
                    <div class="d-flex flex-column">
                        <div class="mt-2 mr-2 text-end"><span>{{auth()->user()->name}}</span></div>
                        <p class="text-secondary">09190443497</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="line-profile bg-secondary rounded-4 position-relative">
                        <span class="profile-circle rounded-circle position-absolute d-inline-block bg-secondary"></span>
                    </div>
                    <div class="d-flex justify-content-between w-100 my-auto">
                        <span class="text-secondary mr-2 mt-2">کیف پول شما</span>
                        <span class="text-secondary mr-2 mt-2">0 تومان</span>
                    </div>
                </div>
                <hr>
                <div>
                    <ul class="nav nav-pills nav-sidebar flex-column main-sidebar-right text-end" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fa fa-shopping-bag"></i>
                                <span>سفارش ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fa fa-heart" aria-hidden="true"></i>
                                <span>لیست های من</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fa fa-comment-alt" aria-hidden="true"></i>
                                <span>دیدگاه ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fa fa-sign-out" aria-hidden="true"></i>
                                <span>خروج</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="text-end">
                    <a href="#" class="dropdown-item dropdown-footer text-secondary">مشاهده اعلانات</a>
                </div>
            </div>
        </li>
    </ul>
</nav>
