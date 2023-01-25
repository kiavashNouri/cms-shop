@component('profile.content')
    <div class="bg-white rounded-4 p-md-5 p-2">
        <h1 class="p-4" style="font-size: 21px">تاریخچه سفارش های شما</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-secondary" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="true">سفارش جاری <span class="badge badge-secondary">0</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-secondary" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">تحویل داده شده <span class="badge badge-secondary">0</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-secondary" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                        aria-selected="false">مرجوع شده <span class="badge badge-secondary">0</span></button>
            </li>
        </ul>
        <div class="tab-content p-md-5 p-2" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                 tabindex="0">
                @include('profile.activity.current-orders')
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                @include('profile.activity.delivered-orders')
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                @include('profile.activity.returned-orders')
            </div>

        </div>
    </div>
@endcomponent
