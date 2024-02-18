@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
    <div class="card">
        @include('admin.layouts.errors')
        <div class="card-body">

            <h4 class="mb-3 header-title">فرم ویرایش اطلاعات سکونت</h4>

            <form class="form-horizontal" method="POST" action="{{ route('admin.sokoonats.update', $sokoonat->id) }}">
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
                    <label for="inputEmail3" class="col-form-label">وضعیت سکونت</label>
                    <input name="homing_status" type="text" class="form-control" id="inputEmail3" placeholder="وضعیت سکونت را وارد کنید" value="{{ old('homing_status', $sokoonat->homing_status) }}">
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-form-label">وضعیت سکونت در منازل سازمانی</label>
                    <input name="homing_status_org" type="text" class="form-control" id="inputEmail3" placeholder="وضعیت سکونت در منازل سازمانی را وارد کنید" value="{{ old('homing_status_org', $sokoonat->homing_status_org) }}">
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-form-label">آدرس کارمند</label>
                    <input name="karmand_address" type="text" class="form-control" id="inputEmail3" placeholder="آدرس کارمند را وارد کنید" value="{{ old('karmand_address', $sokoonat->karmand_address) }}">
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-form-label">کدپستی</label>
                    <input name="postal_code" type="text" class="form-control" id="inputEmail3" placeholder="کدپستی را وارد کنید" value="{{ old('postal_code', $sokoonat->postal_code) }}">
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-form-label">نام بانک</label>
                    <input name="bank_name" type="text" class="form-control" id="inputEmail3" placeholder="نام بانک را وارد کنید" value="{{ old('bank_name', $sokoonat->bank_name) }}">
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-form-label">شماره شبا</label>
                    <input name="shaba_num" type="text" class="form-control" id="inputEmail3" placeholder="شماره شبا را وارد کنید" value="{{ old('shaba_num', $sokoonat->shaba_num) }}">
                </div>
                <div class="justify-content-end row">
                    <div class="">
                        <button type="submit" class="btn btn-info waves-effect waves-light">ویرایش</button>
                        <a href="{{ route('admin.sokoonats.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                    </div>
                </div>
            </form>

        </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
