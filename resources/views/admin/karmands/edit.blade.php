@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
        <div class="card">
            @include('admin.layouts.errors')
            <div class="card-body">

                <h4 class="mb-3 header-title">فرم ویرایش کارمند</h4>

                <form class="form-horizontal" method="POST" action="{{ route('admin.karmands.update', $karmand->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نام</label>
                        <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="نام را وارد کنید" value="{{ old('name', $karmand->name) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نام خانوادگی</label>
                        <input name="family" type="text" class="form-control" id="inputEmail3" placeholder="نام خانوادگی را وارد کنید" value="{{ old('family', $karmand->family) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نام پدر</label>
                        <input name="father_name" type="text" class="form-control" id="inputEmail3" placeholder="نام پدر را وارد کنید" value="{{ old('father_name', $karmand->father_name) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره شناسنامه</label>
                        <input name="sh_shenas" type="text" class="form-control" id="inputEmail3" placeholder="شماره شناسنامه را وارد کنید" value="{{ old('sh_shenas', $karmand->sh_shenas) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">محل صدور</label>
                        <input name="sodoor_loc" type="text" class="form-control" id="inputEmail3" placeholder="محل صدور را وارد کنید" value="{{ old('sodoor_loc', $karmand->sodoor_loc) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">تاریخ تولد</label>
                        <input name="birth" type="text" class="form-control" id="inputEmail3" placeholder="تاریخ تولد را وارد کنید" value="{{ old('birth', $karmand->birth) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">محل تولد</label>
                        <input name="birth_loc" type="text" class="form-control" id="inputEmail3" placeholder="محل تولد را وارد کنید" value="{{ old('birth_loc', $karmand->birth_loc) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">کدملی</label>
                        <input name="kodmeli" type="text" class="form-control" id="inputEmail3" placeholder="کدملی را وارد کنید" value="{{ old('kodmeli', $karmand->kodmeli) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">گروه خونی</label>
                        <input name="blood_type" type="text" class="form-control" id="inputEmail3" placeholder="گروه خونی را وارد کنید" value="{{ old('blood_type', $karmand->blood_type) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">میزان تحصیلات</label>
                        <input name="edu_level" type="text" class="form-control" id="inputEmail3" placeholder="میزان تحصیلات را وارد کنید" value="{{ old('edu_level', $karmand->edu_level) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">رشته تحصیلی</label>
                        <input name="edu_field" type="text" class="form-control" id="inputEmail3" placeholder="رشته تحصیلی را وارد کنید" value="{{ old('edu_field', $karmand->edu_field) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره تلفن</label>
                        <input name="cellphone" type="text" class="form-control" id="inputEmail3" placeholder="شماره تلفن را وارد کنید" value="{{ old('cellphone', $karmand->cellphone) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره خانه</label>
                        <input name="home_phone" type="text" class="form-control" id="inputEmail3" placeholder="شماره خانه را وارد کنید" value="{{ old('home_phone', $karmand->home_phone) }}">
                    </div>
                    <div class="row mb-3">
                        <input type="text" class="form-control mb-2" dir="ltr" value="{{ $karmand->avatar }}" disabled>
                        <img class="w-25" src="{{ asset($karmand->avatar) }}" alt="Image">
                        <hr>
                        <label class="col-sm-2" control-label>آپلود تصویر</label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="justify-content-end row">
                        <div class="">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ویرایش</button>
                            <a href="{{ route('admin.karmands.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
