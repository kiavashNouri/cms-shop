@component('profile.userLists.content')
    <div class="col-md-8 p-0 px-md-2">
        <div class="rounded-5">
            <h1 style="font-size: 19px" class="text-dark-550 flex items-center mb-3 bg-white p-4 rounded-4 text-2xl">
                <i class="ml-2 fa fa-dot-circle-o"></i>
                لیست عمومی شما
            </h1>
        </div>
        <div class="bg-white rounded-4 p-3">
            <div class="d-flex justify-content-end justify-content-sm-between p-2">
                <h2 style="font-size: 16px" class="my-auto w-100 d-none d-sm-block">با ساختن لیست عمومی میتوانید محصول مورد نظر را با دوستان و آشنایان خود به اشتراک بگذارید :)</h2>
                <button class="btn btn-primary mr-1">+ ساختن لیست</button>
            </div>

            <section class="mt-5">
                <div class="row m-0">
                    <div class="col-xl-6 public-list rounded-4">
                        <div class="d-flex flex-column p-2">
                            <h3 style="font-size: 14px" class="font-weight-bold p-2">list name</h3>
                            <div class="d-flex flex-wrap pb-3">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                            </div>
                            <div class="d-flex justify-content-around pt-4">
                                <button class="btn btn-outline-primary">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    اشتراک گذاری
                                </button>
                                <a href="" class="text-decoration-none my-auto text-danger">مشاهده و ویرایش</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 public-list rounded-4">
                        <div class="d-flex flex-column p-2">
                            <h3 style="font-size: 14px" class="font-weight-bold p-2">list name</h3>
                            <div class="d-flex flex-wrap pb-3">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                                <img src="/img/oil.jpg" width="50" height="52" alt="">
                            </div>
                            <div class="d-flex justify-content-around pt-4">
                                <button class="btn btn-outline-primary">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    اشتراک گذاری
                                </button>
                                <a href="" class="text-decoration-none my-auto text-danger">مشاهده و ویرایش</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
@endcomponent
