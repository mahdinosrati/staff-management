@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">جدول همسران</h4>
                <p class="sub-header font-13">
                    بخش مدیریت همسران
                </p>

                <div class="mb-2">
                    <div class="row row-cols-sm-auto g-2 align-items-center">
                        <div class="col-12 text-sm-center">
                            <a href="{{ route('admin.hamsars.create') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle me-2"></i> ایجاد همسر جدید</a>
                        </div>
                        <form action="">
                            <div class="col-12">
                                <input name="search" id="demo-input-search2" type="text" placeholder="جستجو" class="form-control" autocomplete="off" value="{{ request('search') }}">
                            </div>
                        </form>
                    </div>
                </div>

                <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle default footable-loaded footable" data-page-size="7">
                    <thead>
                    <tr>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">کارمند<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">نام<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable">نام خانوادگی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable">نام پدر<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable">کدملی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">اقدامات<span class="footable-sort-indicator"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($hamsars as $hamsar)
                    <tr class="footable-even" style="">
                        <td class="footable-visible"><span class="footable-toggle"></span>{{ $hamsar->karmand->name }} {{ $hamsar->karmand->family }}</td>
                        <td class="footable-visible">{{ $hamsar->name }}</td>
                        <td class="footable-visible">{{ $hamsar->family }}</td>
                        <td class="footable-visible">{{ $hamsar->father_name }}</td>
                        <td class="footable-visible">{{ $hamsar->kodmeli }}</td>
                        <td class="footable-visible footable-last-column d-flex">
                            <a class="btn btn-group btn-sm btn-success" href="{{ route('admin.hamsars.show', $hamsar->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                            <span>
                                .
                            </span>
                            <a href="{{ route('admin.hamsars.edit', $hamsar->id) }}" class="btn btn-group btn-sm btn-primary">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <span>
                                .
                            </span>
                            <form action="{{ route('admin.hamsars.destroy', $hamsar->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-group btn-sm btn-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tfoot>
                </table>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
@endcomponent
