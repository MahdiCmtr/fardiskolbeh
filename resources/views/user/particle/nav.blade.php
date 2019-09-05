<div class="col-lg-4 col-md-4 mb-5">
    <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action {{request()->is('*/dashboard*') ? 'active' : ''}}" href={{route('user.dashboard')}}>پنل</a>
        <a class="list-group-item list-group-item-action {{request()->is('*/profile*') ? 'active' : ''}}" href={{route('user.profile')}}>ویرایش پروفایل</a>
        <a class="list-group-item list-group-item-action {{request()->is('*/dashboarddd*') ? 'active' : ''}}" href="#">بررسی ملک ها</a>
        <a class="list-group-item list-group-item-action {{request()->is('*/dashboardddd/*') ? 'active' : ''}}" href="#">اضافه کردن ملک</a>
        <a class="list-group-item list-group-item-action {{request()->is('*/ticket*') ? 'active' : ''}}" href={{route('user.ticket')}}>درخواست ها</a>
    </div>
</div>
