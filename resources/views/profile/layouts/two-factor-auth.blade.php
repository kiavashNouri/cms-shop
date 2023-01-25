@component('profile.layouts.content')
<div class="col-md-8 p-0 px-md-2">
    <div class="rounded-5 bg-white p-3">
        <h2 class="text-dark-550 dark:text-gray-810 font-bold flex items-center mb-3 text-2xl">
            <i class="ml-2 fa fa-dot-circle-o"></i>
           مدیریت اعتبار سنجی دو مرحله ای
        </h2>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
        </svg>
        <div class="alert alert-primary d-flex align-items-center m-4" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div class="mr-2">
                این قابلیت باعث میشود در هنگام ورود و یا لاگین کردن،به تلفن ثبت شده شما در سیستم کدی فرستاده شود،تا مطمِئن شویم ،صاحب اکانت لاگین کرده است
            </div>
        </div>
        <table class="table no-border">
            <thead>
            <tr>
                <th>احراز هویت دو مرحله ای</th>
                <th class="text-center">عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td class="text-center">
                    <form action="" method="post">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">فعال</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">غیر فعال</label>
                        </div>

                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endcomponent
