@component('profile.content')
    <div class="bg-white rounded-4">
        <div class="d-flex justify-content-around pt-4">
            <h1 class="font-size-1 border-bottom border-2 border-info pb-2" style="font-size: 21px">سفارش های من</h1>
            <span class="bg-primary"></span>
            <a class="my-auto" href="{{route('user.full.activity')}}">مشاهده کامل</a>
        </div>
        <div class="d-flex justify-content-around pt-4 pb-4">
            <div>
                <a href="" class="text-decoration-none text-secondary">
                    <div class="d-none d-md-flex">
                        <img src="/img/images/currentOrders.jpg" width="58" height="58" alt="">
                        <div class="d-md-flex d-none  flex-column my-auto mr-2">
                            <span>0 سفارش</span>
                            <i>سفارشات کنونی</i>
                        </div>
                    </div>
                    <div class="d-flex flex-column d-md-none">
                        <img src="/img/images/currentOrders.jpg" width="58" height="58" alt="">
                        <div class="my-auto mr-2 position-relative">
                            <span class="position-absolute bg-gray rounded-circle text-center text- text-dark" style="bottom: 19px;right: 28px;width: 18px;height: 18px">0</span>
                            <i>سفارشات کنونی</i>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="" class="text-decoration-none text-secondary">
                    <div class="d-none d-md-flex">
                        <img src="/img/images/orderRecived.jpg" width="58" height="58" alt="">
                        <div class="d-md-flex d-none  flex-column my-auto mr-2">
                            <span>0 سفارش</span>
                            <i>تحویل شده</i>
                        </div>
                    </div>
                    <div class="d-flex flex-column d-md-none">
                        <img src="/img/images/orderRecived.jpg" width="58" height="58" alt="">
                        <div class="my-auto mr-2 position-relative">
                            <span class="position-absolute bg-gray rounded-circle text-center text- text-dark" style="bottom: 19px;right: 28px;width: 18px;height: 18px">0</span>
                            <i>تحویل شده</i>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="" class="text-decoration-none text-secondary">
                    <div class="d-none d-md-flex">
                        <img src="/img/images/orderReturned.jpg" width="58" height="58" alt="">
                        <div class="d-md-flex d-none  flex-column my-auto mr-2">
                            <span>0 سفارش</span>
                            <i>مرجوع شده</i>
                        </div>
                    </div>
                    <div class="d-flex flex-column d-md-none">
                        <img src="/img/images/orderReturned.jpg" width="58" height="58" alt="">
                        <div class="my-auto mr-2 position-relative">
                            <span class="position-absolute bg-gray rounded-circle text-center text- text-dark" style="bottom: 19px;right: 28px;width: 18px;height: 18px">0</span>
                            <i>مرجوع شده</i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endcomponent
