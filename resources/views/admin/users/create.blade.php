@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
        <div class="card">
            @include('admin.layouts.errors')
            <div class="card-body">

                <h4 class="mb-3 header-title">فرم ایجاد کاربر ادمین</h4>

                <form class="form-horizontal" method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نام و نام خانوادگی</label>
                        <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="نام و نام خانوادگی را وارد کنید" value="{{ old('name') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">ایمیل</label>
                        <input name="email" type="text" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید" value="{{ old('email') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره تلفن</label>
                        <input name="cellphone" type="text" class="form-control" id="inputEmail3" placeholder="شماره تلفن را وارد کنید" value="{{ old('cellphone') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">پسورد</label>
                        <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="پسورد را وارد کنید">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword5" class="col-form-label">تکرار پسورد</label>
                        <input name="password_confirmation" type="password" class="form-control" id="inputPassword5" placeholder="تکرار پسورد را وارد کنید">
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label"> آپلود عکس پروفایل</label>
                        <input name="avatar" type="file" class="form-control" id="inputPassword5">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword5" class="col-form-label">نوع کاربر</label>
                        <input name="type" type="number" class="form-control" id="inputPassword5" placeholder="نوع کاربر را وارد کنید (برای کاربر عادی 0 و برای مدیر 1 را وارد کنید)">
                    </div>

                    <div class="justify-content-end row">
                        <div class="">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ایجاد</button>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
