@if(session('sucsses'))
    <div class="alert alert-success" align="right">
        <strong>موفق!</strong>  ثبت و انتشار یافت
    </div>
@endif
@if(session('sucssesdelete'))
    <div class="alert alert-danger" align="right">
        <strong>موفق!</strong>حذف با موفقیت انجام شد
    </div>
@endif
@if(session('succesedit'))
    <div class="alert alert-primary" align="right">
        <strong>موفق!</strong>ویرایش با موفقیت انجام شد
    </div>
@endif
