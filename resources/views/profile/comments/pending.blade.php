@component('profile.comments.content')
    <div class="col-md-8 p-0 px-md-2">
        <div class="rounded-5">
            <h1 style="font-size: 19px" class="text-dark-550 flex items-center mb-3 bg-white p-4 rounded-4 text-2xl">
                <i class="ml-2 fa fa-dot-circle-o"></i>
                دیدگاه ها
            </h1>
        </div>
        <div class="bg-white rounded-4 p-3">
            <div class="d-flex p-2">
                <img src="/img/images/rating.png" width="65" height="65" alt="rating">
                <div class="d-flex flex-column mr-2">
                    <h2 style="font-size: 16px" class="my-auto w-100 d-none d-sm-block">رفیق،از این کالا راضی هستی؟</h2>
                    <i class="my-auto">نظراتت میتونه کمک کننده باشه دوست گلم :)</i>
                </div>
            </div>
            <section class="mt-5">
                <div class="row m-0">
                    <div class="col-xl-6 public-list rounded-4 mt-3">
                        <div class="d-flex flex-column p-2">
                            <div class="d-flex">
                                <img src="/img/oil.jpg" width="70" title="oil" alt="ladan oil" height="73" alt="">
                                <span class="font-weight-bold my-auto" style="font-size: 16px">روغن مایع 1 لیتری</span>
                            </div>
                            <a class="btn btn-outline-primary mr-2 w-100" href="">
                                <i class="fa fa-comment"></i>
                                افزودن نظر
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 public-list rounded-4 mt-3">
                        <div class="d-flex flex-column p-2">
                            <div class="d-flex">
                                <img src="/img/oil.jpg" width="70" title="oil" alt="ladan oil" height="73" alt="">
                                <span class="font-weight-bold my-auto" style="font-size: 16px">روغن مایع 1 لیتری</span>
                            </div>
                            <a class="btn btn-outline-primary mr-2 w-100" href="">
                                <i class="fa fa-comment"></i>
                                افزودن نظر
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endcomponent
