@php($posts = json_decode($posts))
<a href=/estate/{{$posts->slug}}/view class="mb-3 d-block text-dark">
    <div class="card py-3 h-50">
        <div class="car-body m-1 d-flex flex-sm-column flex-md-row flex-column dir-right text-right">
            <img src={{asset('storage/estate_image/'.'/'.$posts->img[0])}} alt="" width="250" height="200" class="m-auto">
            <div class="d-flex flex-column justify-content-between px-3 w-100 overflow-hidden">
                <div class="">
                    <h5 class="mb-3">
                        {{$posts->title}}
                    </h5>
                    <p class="grey-text">
                        {{$posts->description}}
                    </p>
                </div>
                <div class="d-flex flex-row-reverse justify-content-between">
                    <div>
                        <p class="m-0 text-danger text-left">
                            {{$posts->updated_at}}
                        </p>
                        <p class="m-0 text-left">
                            {{$posts->address}}
                        </p>
                    </div>
                    <div class="views font-small">
                        <i class="fas fa-eye"></i>
                        {{$posts->views}}
                    </div>
                    {{--  <div>
                        <p class="d-inline-block">قیمت کل :
                            ۲۰۰٫۰۰۰٫۰۰۰ تومان
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>
</a>
