@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
        <div class="card">
            @include('admin.layouts.errors')
            <div class="card-body">

                <h4 class="mb-3 header-title">فرم ایجاد پرسنلی</h4>

                <form class="form-horizontal" method="POST" action="{{ route('admin.personals.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">آیدی کارمند</label>
                        <select name="karmand_id" id="karmand_id">
                            @foreach (\App\Models\Karmand::all() as $karmand)
                            <option value="{{ $karmand->id }}">{{ $karmand->id }} - {{ $karmand->name }} {{ $karmand->family }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره پرسنلی</label>
                        <input name="sh_personeli" type="text" class="form-control" id="inputEmail3" placeholder="شماره پرسنلی را وارد کنید" value="{{ old('sh_personeli') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره کلاسه</label>
                        <input name="sh_class" type="text" class="form-control" id="inputEmail3" placeholder="شماره کلاسه را وارد کنید" value="{{ old('sh_class') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">مقام فعلی</label>
                        <input name="current_rank" type="text" class="form-control" id="inputEmail3" placeholder="مقام فعلی را وارد کنید" value="{{ old('current_rank') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">تاریخ آخرین ترفیع</label>
                        <input name="lastp" type="text" class="form-control" id="inputEmail3" placeholder="تاریخ آخرین ترفیع را وارد کنید" value="{{ old('lastp') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">مقام سازمانی</label>
                        <input name="org_rank" type="text" class="form-control" id="inputEmail3" placeholder="مقام سازمانی را وارد کنید" value="{{ old('org_rank') }}">
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">تاریخ استخدام</label>
                        <input name="hdate" type="text" class="form-control" id="inputEmail3" placeholder="تاریخ استخدام را وارد کنید" value="{{ old('hdate') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نوع جذب</label>
                        <input name="recruitment_type" type="text" class="form-control" id="inputEmail3" placeholder="نوع جذب را وارد کنید" value="{{ old('recruitment_type') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نوع عضویت</label>
                        <input name="register_type" type="text" class="form-control" id="inputEmail3" placeholder="نوع عضویت را وارد کنید" value="{{ old('register_type') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">آخرین مدرک تحصیلی</label>
                        <input name="last_edu_degree" type="text" class="form-control" id="inputEmail3" placeholder="آخرین مدرک تحصیلی را وارد کنید" value="{{ old('last_edu_degree') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">رشته تحصیلی</label>
                        <input name="edu_field" type="text" class="form-control" id="inputEmail3" placeholder="رشته تحصیلی را وارد کنید" value="{{ old('edu_field') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره شناسنامه</label>
                        <input name="sh_shenas" type="text" class="form-control" id="inputEmail3" placeholder="شماره شناسنامه را وارد کنید" value="{{ old('sh_shenas') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">وضعیت خدمت</label>
                        <input name="duty_status" type="text" class="form-control" id="inputEmail3" placeholder="وضعیت خدمت را وارد کنید" value="{{ old('duty_status') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">وضعیت جسمانی</label>
                        <input name="physical_condition" type="text" class="form-control" id="inputEmail3" placeholder="وضعیت جسمانی را وارد کنید" value="{{ old('physical_condition') }}">
                    </div>
                    <div class="justify-content-end row">
                        <div class="">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ایجاد</button>
                            <a href="{{ route('admin.personals.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
