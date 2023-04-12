<div class="col-md-4 p-0 px-md-2">
    <div class="card shadow-none border-0 rounded-5 p-3">
        <img src="/img/images/address.jpg" height="258" class="card-img-top rounded-2" alt="addresses image">
        <div class="card-body pt-3">
            <ul class="list-group list-group-flush ">
                <li>
                    <a class="list-group-item text-decoration-none link-secondary {{isUrl(route('user.addresses'),'border border-primary rounded-4 p-3 text-primary')}}"
                       href="{{route('pending.to.comment')}}">آدرس های شما</a>
                </li>
                <li>
                    <button class="list-group-item text-decoration-none link-secondary {{isUrl(route('user.comments'),'border border-primary rounded-4 p-3 text-primary')}}">ایجاد آدرس</button>
                </li>
            </ul>
        </div>
    </div>
</div>
