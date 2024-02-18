@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
        <div class="card">
            @include('admin.layouts.errors')
            <div class="card-body">

                <h4 class="mb-3 header-title">فرم ایجاد کاربر ادمین</h4>

                <form class="form-horizontal" method="POST" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نام و نام خانوادگی</label>
                        <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="نام و نام خانوادگی را وارد کنید" value="{{ old('name', $user->name) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">ایمیل</label>
                        <input name="email" type="text" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید" value="{{ old('email', $user->email) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره تلفن (اختیاری)</label>
                        <input name="cellphone" type="text" class="form-control" id="inputEmail3" placeholder="شماره تلفن را وارد کنید" value="{{ old('cellphone', $user->cellphone) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">پسورد</label>
                        <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="پسورد را وارد کنید">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword5" class="col-form-label">تکرار پسورد</label>
                        <input name="password_confirmation" type="password" class="form-control" id="inputPassword5" placeholder="تکرار پسورد را وارد کنید">
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <img class="w-25" src="{{ asset($user->avatar) }}" alt="Image">
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2" control-label>آپلود تصویر</label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword5" class="col-form-label">نوع کاربر</label>
                        <input name="type" type="number" class="form-control" id="inputPassword5" placeholder="نوع کاربر را وارد کنید (برای کاربر عادی 0 و برای مدیر 1 را وارد کنید)" value="{{ old('type', $user->type) }}">
                    </div>

                    <div class="justify-content-end row">
                        <div class="">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ویرایش</button>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
