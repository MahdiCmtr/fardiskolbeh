<form action="buy/search" method="GET">
    <div class="jumbotron pt-5 pb-3 bg-light">
        <div class="row flex-row-reverse">
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <input type="text" class="form-control text-right" name="all" placeholder="جستجو در همه املاک <?= isset($_GET['search_category']) ? $_GET['search_category'] : 'همه املاک'; ?>" value="<?= isset($_GET['all']) ? $_GET['all'] : ''; ?>">
                    <input hidden name=" category" type="text" value="<?= isset($_GET['search_category']) ? $_GET['search_category'] : ''; ?>">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group pos-relative not-disable">
                    <input type="text" class="form-control input_serach text-right not-disable" placeholder="فیلتر ملک" name="filter" autocomplete="off" value="<?= isset($_GET['filter']) ? $_GET['filter'] : ''; ?>">
                    <div class="select_box_search not-disable pos-absolute left-0 d-none">
                        <div class="input_search not-disable w-100 p-3 border-bottom-1-search">
                            <input type="text" class="dir-right px-2 not-disable pb-2 w-100" placeholder="اینجا جستجو کنید">
                        </div>
                        <div class="body dir-right not-disable text-right p-2">
                            <span class="text-rgba-c not-disable">تعداد اتاق</span>
                            <ul>
                                <li class="overflow-auto parent-customCheckbox not-disable">
                                    <span class="custom-checkbox not-disable"></span>
                                    <p href="#" class="m-1 d-block not-disable">یک</p>
                                </li>
                                <li class="overflow-auto parent-customCheckbox not-disable">
                                    <span class="custom-checkbox not-disable"></span>
                                    <p href="#" class="m-1 d-block not-disable">دو</p>
                                </li>
                                <li class="overflow-auto parent-customCheckbox not-disable">
                                    <span class="custom-checkbox not-disable"></span>
                                    <p href="#" class="m-1 d-block not-disable">بیشتر</p>
                                </li>
                            </ul>
                            <span class="text-rgba-c not-disable">سرویس بهداشتی</span>
                            <ul>
                                <li class="overflow-auto parent-customCheckbox not-disable">
                                    <span class="custom-checkbox not-disable"></span>
                                    <p href="#" class="m-1 d-block not-disable">ایرانی</p>
                                </li>
                                <li class="overflow-auto parent-customCheckbox not-disable">
                                    <span class="custom-checkbox not-disable"></span>
                                    <p href="#" class="m-1 d-block not-disable">فرنگی</p>
                                </li>
                                <li class="overflow-auto parent-customCheckbox not-disable">
                                    <span class="custom-checkbox not-disable"></span>
                                    <p href="#" class="m-1 d-block not-disable">هردو</p>
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-sm waves-effect waves-light float-left not-disable button_serach_complete">ثبت</button>
                            <button class="btn btn-primary btn-sm waves-effect waves-light float-left not-disable button_serach_clear">ریست</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control text-right" placeholder="همه محله ها" name="location" value="<?= isset($_GET['location']) ? $_GET['location'] : ''; ?>">
                </div>
            </div>
        </div>
        <input class="btn btn-danger mt-4 px-4" type="submit" value="جستجو">
</form>
