<div class="col-md-4 p-0 px-md-2">
    <div class="card shadow-none border-0 rounded-5 p-3">
        <img src="/img/me-min.png" height="258" class="card-img-top rounded-2" alt="...">
        <ul class="p-3 profile-ul">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                نام:
                <span>کیاوش</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                نام خانوادگی
                <span>نوری</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                سن
                <span>25</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                شماره تلفن
                <span>09190443497</span>
            </li>
        </ul>
        <div class="card-body">
            <ul class="list-group list-group-flush ">
                <li>
                    <a class="list-group-item text-decoration-none link-secondary {{isUrl(route('profile'),'border border-primary rounded-4 p-3 text-primary')}}"
                       href="{{route('profile')}}">حساب شما(اطلاعات)</a></li>
                <li>
                    <a class="list-group-item text-decoration-none link-secondary {{isUrl(route('profile.2fa-manage'),'border border-primary rounded-4 p-3 text-primary')}}"
                       href="{{route('profile.2fa-manage')}}">اعتبار سنجی دو مرحله ای</a></li>
                <li>
                    <a class="list-group-item text-decoration-none link-secondary {{isUrl(route('profile.reset-password'),'border border-primary rounded-4 p-3 text-primary')}}"
                       href="{{route('profile.reset-password')}}">تغییر رمز عبور</a></li>
                <li>
                    <a class="list-group-item text-decoration-none link-secondary {{isUrl(route('profile.notification.show'),'border border-primary rounded-4 p-3 text-primary')}}"
                       href="{{route('profile.notification.show')}}">مدیریت اطلاع رسانی</a></li>
            </ul>
        </div>
    </div>
</div>
