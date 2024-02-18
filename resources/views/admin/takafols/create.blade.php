@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
        <div class="card">
            @include('admin.layouts.errors')
            <div class="card-body">

                <h4 class="mb-3 header-title">فرم ایجاد وضعیت تکفل کارمندان</h4>

                <form class="form-horizontal" method="POST" action="{{ route('admin.takafols.store') }}">
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
                        <label for="inputEmail3" class="col-form-label">همسر</label>
                        <select name="hamsar_id" id="hamsar_id">
                            @foreach (\App\Models\Hamsar::all() as $hamsar)
                            <option value="{{ $hamsar->id }}">{{ $hamsar->id }} - {{ $hamsar->name }} {{ $hamsar->family }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">فرزند</label>
                        <select name="child_id" id="child_id">
                            @foreach (\App\Models\Child::all() as $child)
                            <option value="{{ $child->id }}">{{ $child->id }} - {{ $child->name }} {{ $child->family }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">وضعیت رابطه</label>
                        <input name="relation_stats" type="text" class="form-control" id="inputEmail3" placeholder="وضعیت رابطه را وارد کنید" value="{{ old('relation_stats') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">تعداد افراد تحت تکفل</label>
                        <input name="takafol_people_count_and_gender" type="text" class="form-control" id="inputEmail3" placeholder="تعداد افراد تحت تکفل را وارد کنید" value="{{ old('takafol_people_count_and_gender') }}">
                    </div>
                    <div class="justify-content-end row">
                        <div class="">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ایجاد</button>
                            <a href="{{ route('admin.takafols.index') }}" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>  <!-- end card-body -->
    </div>
</div>
@endcomponent
