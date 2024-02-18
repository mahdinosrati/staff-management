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
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">کد خروج</th>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">تاریخ شروع<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">تاریخ پایان<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable">تعداد روز<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-sortable">نوع مرخصی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">دلیل<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">عملیات<span class="footable-sort-indicator"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="footable-even" style="">
                        <td class="text-center footable-visible footable-first-column">{{ $leaf->karmand->name }}</td>
                        <td class="text-center footable-visible footable-first-column">{{ $leaf->leave_code }}</td>
                        <td class="footable-visible"><span class="footable-toggle"></span>{{ $leaf->s_date }}</td>
                        <td class="footable-visible">{{ $leaf->e_date }}</td>
                        <td class="footable-visible">{{ $leaf->day_num }}</td>
                        <td class="footable-visible">{{ $leaf->type_of_leave }}</td>
                        <td class="footable-visible">{{ $leaf->reason }}</td>
                        <td class="footable-visible">
                            <a href="{{ route('admin.leaves.index') }}" class="btn btn-sm btn-secondary">بازگشت</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>

@endcomponent
