@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
        <div class="card">
            @include('admin.layouts.errors')
            <div class="card-body">

                <h4 class="mb-3 header-title">فرم ویرایش مرخصی تشویقی</h4>

                <form class="form-horizontal" method="POST" action="{{ route('admin.encouragements.update', $encouragement->id) }}">
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
                        <label for="inputEmail3" class="col-form-label">تاریخ</label>
                        <input name="date" type="text" class="form-control" id="inputEmail3" placeholder="تاریخ را وارد کنید" value="{{ old('date', $encouragement->date) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">توضیحات</label>
                        <input name="description" type="text" class="form-control" id="inputEmail3" placeholder="توضیحات را وارد کنید" value="{{ old('description', $encouragement->description) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">شماره مرخصی</label>
                        <input name="number" type="text" class="form-control" id="inputEmail3" placeholder="شماره مرخصی را وارد کنید" value="{{ old('number', $encouragement->number) }}">
                    </div>
                    <div class="justify-content-end row">
                        <div class="">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ویرایش</button>
                            <a href="{{ route('admin.encouragements.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
