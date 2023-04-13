@component('profile.layouts.content')
    <div class="col-md-8">
        <div class="rounded-5 bg-white p-3">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">نام</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="نام خود را وارد کنید">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="family">نام خانوادگی</label>
                        <input type="text" class="form-control" name="family" id="family" placeholder="نام خانوادگی خود را وارد کنید">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">ایمیل</label>
                    <input type="email" class="form-control bg-light" name="email" disabled id="email" placeholder="www.kiavash7666@gmail.com">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">شماره تلفن</label>
                    <input type="text" class="form-control bg-light" name="phone" id="phone" placeholder="شماره تلفنت برای خریدات لازمه :)">
                </div>

                <div class="form-group col-md-4">
                    <label for="age">تاریخ تولد</label>
                    <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="چند سالته شما؟!" value="25">
                </div>
                <div class="form-group col-12">
                    <label for="about">در باره من</label>
                    <textarea class="form-control" name="about" rows="7" id="about" placeholder="دوست داشتی چیزی درباره خودت بنویس :)"></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">استان</label>
                        <input type="text" class="form-control" id="city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">شهر</label>
                        <input type="text" class="form-control" id="state">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">آدرس منزل</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="آپارتمان ، استودیو ، ویلا">
                </div>
                <div class="row pt-5">
                    <h2 class="text-dark-550 dark:text-gray-810 font-bold flex items-center mb-3 text-2xl">
                        <i class="ml-2 fa fa-dot-circle-o"></i>
                        راه های ارتباطی
                    </h2>
                    <div class="col-md-6">
                        <label for="profileTelegram">تلگرام</label>
                        <input type="text" class="form-control" id="profileTelegram" name="profileTelegram" placeholder="userid@">
                    </div>
                    <div class="col-md-6">
                        <label for="profileEmail">ایمیل</label>
                        <input type="text" class="form-control" id="profileEmail" name="profileEmail" placeholder="yourgmail@gmail.com">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">ذخیره</button>
            </form>
        </div>
    </div>
@endcomponent
