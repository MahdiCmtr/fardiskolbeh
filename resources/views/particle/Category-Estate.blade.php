<ul class="list-group list-group-flush p-0">
    @if (array_filter(explode('/',trim(request()->server('PATH_INFO'))))[1] == 'buy-sales')
    <li class="list-group-item"><a href={{route('list-Estate-Buy-Sales')}}>همه آگهی ها</a></li>
        @foreach ($topCategory as $Category)
            <li class="list-group-item">
                <a href={{route('list-Estate-category-Buy-Sales',['category'=>$Category->title])}}>{{$Category->title}}</a>
            </li>
        @endforeach
    @else
        <li class="list-group-item"><a href={{route('list-Estate-rent')}}>همه آگهی ها</a></li>
        @foreach ($topCategory as $Category)
            <li class="list-group-item">
                <a href={{route('list-Estate-category-rent',['category'=>$Category->title])}}>{{$Category->title}}</a>
            </li>
        @endforeach
    @endif

</ul>
