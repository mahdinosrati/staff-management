@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
        <div class="card">
            @include('admin.layouts.errors')
            <div class="card-body">

                <h4 class="mb-3 header-title">فرم ایجاد مرخصی</h4>

                <form class="form-horizontal" method="POST" action="{{ route('admin.leaves.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">کارمند</label>
                        <select name="karmand_id" id="karmand_id">
                            @foreach (\App\Models\Karmand::all() as $karmand)
                            <option value="{{ $karmand->id }}">{{ $karmand->id }} - {{ $karmand->name }} {{ $karmand->family }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">کد خروج</label>
                        <input name="leave_code" type="text" class="form-control" id="inputEmail3" placeholder="کد خروج را وارد کنید" value="{{ old('leave_code') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">تاریخ شروع</label>
                        <input name="s_date" type="text" class="form-control" id="inputEmail3" placeholder="تاریخ شروع را وارد کنید" value="{{ old('s_date') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">تاریخ پایان</label>
                        <input name="e_date" type="text" class="form-control" id="inputEmail3" placeholder="تاریخ پایان را وارد کنید" value="{{ old('e_date') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">تعداد روز</label>
                        <input name="day_num" type="text" class="form-control" id="inputEmail3" placeholder="تعداد روز را وارد کنید" value="{{ old('day_num') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نوع مرخصی</label>
                        <input name="type_of_leave" type="text" class="form-control" id="inputEmail3" placeholder="نوع مرخصی را وارد کنید" value="{{ old('type_of_leave') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">دلیل مرخصی</label>
                        <input name="reason" type="text" class="form-control" id="inputEmail3" placeholder="دلیل مرخصی را وارد کنید" value="{{ old('reason') }}">
                    </div>
                    <div class="justify-content-end row">
                        <div class="">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ایجاد</button>
                            <a href="{{ route('admin.leaves.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
