@component('profile.notifications.content')
    <div class="col-md-8 p-0 px-md-2">
        <div class="rounded-4 p-3 bg-white mb-3">
            <div class="d-sm-flex d-none justify-content-between">
                <div>
                    <a href="{{route('user.notifications')}}"
                       class="text-decoration-none {{isUrl(route('user.notifications'),'btn btn-primary','text-black opacity-50')}} ml-1"><i
                            class="fa fa-envelope ml-1"></i>اعلانات خوانده نشده</a>
                    <a href="{{request()->fullUrlWithQuery(['read'=>1])}}"
                       class="text-decoration-none {{isUrl(request()->fullUrlWithQuery(['read'=>1]),'btn btn-primary','text-black opacity-50')}}"><i
                            class="fa fa-envelope-open ml-1"></i>اعلانات خوانده شده</a>
                </div>
                <div class="my-auto">
                    <a href="" class="text-info text-decoration-none text-bold">حذف همه اعلانات</a>
                </div>
            </div>
            <div class="dropdown d-block d-sm-none w-100">
                <button class="form-select rounded-4 w-100" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    اعلانات
                </button>
                <ul class="dropdown-menu w-100 text-right" aria-labelledby="dropdownMenuButton">
                    <li class="{{isUrl(route('user.notifications'),'btn btn-primary')}} mb-3 w-100 text-center"><a
                            class="text-decoration-none {{isUrl(route('user.notifications'),'text-white','text-secondary')}}"
                            href="{{route('user.notifications')}}">اعلانات خوانده نشده</a></li>
                    <li class="{{isUrl(request()->fullUrlWithQuery(['read'=>1]),'btn btn-primary')}} mb-3 w-100 text-center"><a
                            class="text-decoration-none {{isUrl(request()->fullUrlWithQuery(['read'=>1]),'text-white','text-secondary')}}"
                            href="{{request()->fullUrlWithQuery(['read'=>1])}}">اعلانات خوانده شده</a></li>
                    <li class="w-100 text-center"><a href="" class="text-info text-decoration-none text-bold">حذف همه اعلانات</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-white rounded-4 p-3">
            <section class="mt-5">
                <div class="row m-0">
                    <div class="rounded-4 mt-3">
                        <div class="mb-3 d-sm-flex justify-content-sm-between p-2">
                            <div class="mt-2 ml-2">
                                <p class="bell-reminder">کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید</p>
                            </div>
                            <div class="my-auto text-nowrap">
                                <span>دو هفته پیش<i class="fa fa-clock text-secondary opacity-75 mr-1 "></i></span>
                            </div>
                        </div>
                        <div class="mb-3 d-sm-flex justify-content-sm-between p-2">
                            <div class="mt-2 ml-2">
                                <p class="bell-reminder">کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید</p>
                            </div>
                            <div class="my-auto text-nowrap">
                                <span>دو هفته پیش<i class="fa fa-clock text-secondary opacity-75 mr-1 "></i></span>
                            </div>
                        </div>
                        <div class="mb-3 d-sm-flex justify-content-sm-between p-2">
                            <div class="mt-2 ml-2">
                                <p class="bell-reminder">کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید کالای جاروبرقی پارس خزر موجود گردید</p>
                            </div>
                            <div class="my-auto text-nowrap">
                                <span>دو هفته پیش<i class="fa fa-clock text-secondary opacity-75 mr-1 "></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endcomponent
