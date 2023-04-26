<header class="main-head mx-auto position-fixed">
    <section class="d-flex p-4 bg-white position-relative">
        <img src="img/images/logo.svg" class="header-logo" alt="header-logo">
        <div class="w-50 mx-auto my-auto">
            <form action="" class="position-relative w-100 mx-auto">
                <input class="border-0 p-3 rounded-4 nav-search w-100" type="text" name="search" id="search"
                       placeholder="     چی میخوای دوست عزیز؟" aria-label="Search">
                <i class="fa fa-search position-absolute text-secondary"></i>
            </form>
        </div>

        <div class="d-flex justify-content-between">
                <span class="border border-opacity-25 rounded-3 ml-3 p-2 my-auto">
                    <a href="" class="text-decoration-none text-secondary  "><i class="ml-1 fa fa-sign-in fa-rotate-180"
                                                                                style="vertical-align: -2px"></i>ورود | ثبت نام </a>
                </span>
            <img src="img/images/online-shopping.png" class="ml-3 opacity-75 my-auto" width="26" height="26" alt="">

            {{--                <span class="bg-black opacity-25 ml-5 my-auto" style="width: 2px;height: 34px"></span>--}}
            @if(auth()->check())
                <div class="story position-relative">
                    <img src="img/me-min.png" class="user-image" alt="{{auth()->user()->name}} story">
                    <svg viewbox="0 0 100 100">
                        <circle cx="50" cy="50" r="40"/>
                    </svg>
                </div>
            @endif
        </div>
    </section>
    <section class="container myNavbar rounded-bottom bg-gray position-relative">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown category-menu">
                            <i class="fa fa-bars text-secondary ml-1"></i>
                            <a class="nav-link" href="#" role="button" aria-expanded="false">
                                دسته بندی ها
                            </a>
                        </li>
                        <li class="nav-item">
                            <i class="fa fa-fire text-secondary ml-1"></i>
                            <a class="nav-link" href="#">تخفیف ها</a>
                        </li>
                        <li class="nav-item">
                            <i class="fa fa-bolt text-secondary ml-1"></i>
                            <a class="nav-link" href="#">پیشنهاد های ویژه</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="dropdown-menu position-absolute w-100">
            <div class="row m-0 text-right">
                <div class="col-2 border-left">
                    <ul class="list-group border-0 menu-target">
                        <li class="list-group-item" data-menu-target="#phone">An item</li>
                        <li class="list-group-item" data-menu-target="#computer">A second item</li>
                        <li class="list-group-item" data-menu-target="#laptop">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
                <div class="col-10">
                    <div class="d-flex flex-wrap" id="phone">
                        <div class="list-group mt-2 ml-2">
                            <a href="" class="list-group-item font-weight-bold"> موبایل موبایل موبایل موبایل </a>
                            <a href="" class="list-group-item"> موبایل</a>
                            <a href="" class="list-group-item"> موبایل</a>
                            <a href="" class="list-group-item font-weight-bold"> موبایل موبایل موبایل موبایل</a>
                            <a href="" class="list-group-item"> موبایل موبایل موبایل موبایل </a>
                            <a href="" class="list-group-item"> موبایل</a>
                            <a href="" class="list-group-item"> موبایل</a>
                            <a href="" class="list-group-item font-weight-bold"> موبایل موبایل موبایل موبایل</a>
                        </div>
                    </div>


                    <div class="d-flex flex-wrap" id="computer">
                        <div class="list-group mt-2 ml-2">
                            <a href="" class="list-group-item font-weight-bold"> computer computer computer computer
                                computer</a>
                            <a href="" class="list-group-item">computer</a>
                            <a href="" class="list-group-item">computer</a>
                            <a href="" class="list-group-item font-weight-bold">computer computer computer computer
                                computer</a>
                            <a href="" class="list-group-item">computer computer computer computer</a>
                            <a href="" class="list-group-item">computer </a>
                            <a href="" class="list-group-item">computer</a>
                            <a href="" class="list-group-item font-weight-bold">computer computer computercomputer</a>
                        </div>
                    </div>


                    <div class="d-flex flex-wrap" id="laptop">
                        <div class="list-group mt-2 ml-2">
                            <a href="" class="list-group-item font-weight-bold"> laptop laptop laptoplaptop laptop</a>
                            <a href="" class="list-group-item">laptop laptop laptoplaptop</a>
                            <a href="" class="list-group-item">laptop laptop laptop</a>
                            <a href="" class="list-group-item font-weight-bold">laptop laptop laptop laptop</a>
                            <a href="" class="list-group-item">laptop laptop </a>
                            <a href="" class="list-group-item">laptop</a>
                            <a href="" class="list-group-item">laptop</a>
                            <a href="" class="list-group-item font-weight-bold">laptop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
