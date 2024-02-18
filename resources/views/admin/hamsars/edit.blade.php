@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
        <div class="card">
            @include('admin.layouts.errors')
            <div class="card-body">

                <h4 class="mb-3 header-title">فرم ویرایش همسر</h4>

                <form class="form-horizontal" method="POST" action="{{ route('admin.hamsars.update', $hamsar->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">کارمند</label>
                        <select name="karmand_id" id="karmand_id">
                            @foreach (\App\Models\Karmand::all() as $karmand)
                            <option value="{{ $karmand->id }}">{{ $karmand->id }} - {{ $karmand->name }} {{ $karmand->family }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نام</label>
                        <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="نام را وارد کنید" value="{{ old('name', $hamsar->name) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نام خانوادگی</label>
                        <input name="family" type="text" class="form-control" id="inputEmail3" placeholder="نام خانوادگی را وارد کنید" value="{{ old('family', $hamsar->family) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">نام پدر</label>
                        <input name="father_name" type="text" class="form-control" id="inputEmail3" placeholder="نام پدر را وارد کنید" value="{{ old('father_name', $hamsar->father_name) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">کدملی</label>
                        <input name="kodmeli" type="text" class="form-control" id="inputEmail3" placeholder="کدملی را وارد کنید" value="{{ old('kodmeli', $hamsar->kodmeli) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">تاریخ تولد</label>
                        <input name="birth" type="text" class="form-control" id="inputEmail3" placeholder="تاریخ تولد را وارد کنید" value="{{ old('birth', $hamsar->birth) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره تلفن</label>
                        <input name="cellphone" type="text" class="form-control" id="inputEmail3" placeholder="شماره تلفن را وارد کنید" value="{{ old('cellphone', $hamsar->cellphone) }}">
                    </div>
                    <div class="justify-content-end row">
                        <div class="">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ویرایش</button>
                            <a href="{{ route('admin.hamsars.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
