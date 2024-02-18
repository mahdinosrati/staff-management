@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">جدول همسران</h4>
                <p class="sub-header font-13">
                    بخش مدیریت همسران
                </p>
                <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle default footable-loaded footable" data-page-size="7">
                    <thead>
                    <tr>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">کارمند</th>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">تاریخ</th>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">توضیحات<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">شماره مرخصی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">عملیات<span class="footable-sort-indicator"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="footable-even" style="">
                        <td class="text-center footable-visible footable-first-column">{{ $encouragement->karmand->name }}</td>
                        <td class="text-center footable-visible footable-first-column">{{ $encouragement->date }}</td>
                        <td class="footable-visible"><span class="footable-toggle"></span>{{ $encouragement->description }}</td>
                        <td class="footable-visible">{{ $encouragement->number }}</td>
                        <td class="footable-visible">
                            <a href="{{ route('admin.encouragements.index') }}" class="btn btn-sm btn-secondary">بازگشت</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>

@endcomponent
