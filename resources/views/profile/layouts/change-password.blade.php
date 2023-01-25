@component('profile.layouts.content')
    <div class="col-md-8 p-0 px-md-2">
        <div class="rounded-5 bg-white p-3">
            <h2 class="text-dark-550 dark:text-gray-810 font-bold flex items-center mb-3 text-2xl">
                <i class="ml-2 fa fa-dot-circle-o"></i>
                تغییر پسورد
            </h2>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>


            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2 mb-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div class="p-2">
                     باید از حروف انگلیسی استفاده کنید <br>
                     حروف انگلیسی بزرگ و کوچک باید استفاده شود <br>
                    از کاراکتر های خاص استفاده کنید مانند @#$&<br>
                    حداقل از 8 کاراکتر استفاده کنید

                </div>
            </div>
            <form>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="lastPass">پسورد قبلی</label>
                        <input type="password" class="form-control" name="lastPass" id="lastPass" placeholder="پسورد قبلی خود را وارد کنید تا متوجه شویم شخص اصلی هستید">
                    </div>
                    <div class="form-group col-12">
                        <label for="newPass">پسورد جدید</label>
                        <input type="password" class="form-control" name="newPass" id="newPass" placeholder="پسورد جدید خود را وارد کنید">
                    </div>
                </div>

                <div class="text-center">
                    <a href="">رمز عبور خود را فراموش کرده اید؟</a>
                </div>
                <button type="submit" class="btn btn-primary mt-4">ذخیره</button>
            </form>

        </div>
    </div>
@endcomponent
