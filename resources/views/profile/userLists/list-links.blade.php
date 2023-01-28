<div class="col-md-4 p-0 px-md-2">
    <div class="card shadow-none border-0 rounded-5 p-3">
        <img src="/img/images/wishlist.jpg" height="258" class="card-img-top rounded-2" alt="...">
        <div class="card-body pt-3">
            <ul class="list-group list-group-flush ">
                <li>
                    <a class="list-group-item text-decoration-none link-secondary {{isUrl(route('user.favorites.lists'),'border border-primary rounded-4 p-3 text-primary')}}"
                       href="{{route('user.favorites.lists')}}">لیست علاقه مندی ها</a>
                </li>
                <li>
                    <a class="list-group-item text-decoration-none link-secondary {{isUrl(route('user.public.list'),'border border-primary rounded-4 p-3 text-primary')}}"
                       href="{{route('user.public.list')}}">لیست عمومی</a>
                </li>

            </ul>
        </div>
    </div>
</div>
