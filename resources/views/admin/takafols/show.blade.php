@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">جدول وضعیت تکفل</h4>
                <p class="sub-header font-13">
                    بخش مدیریت وضعیت تکفل
                </p>
                <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle default footable-loaded footable" data-page-size="7">
                    <thead>
                    <tr>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">نام کارمند</th>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">نام همسر</th>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">نام فرزند<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">وضعیت رابطه<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable">تعداد افراد تحت تکفل<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">عملیات<span class="footable-sort-indicator"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="footable-even" style="">
                        <td class="text-center footable-visible footable-first-column">{{ $takafol->karmand->name }}</td>
                        <td class="text-center footable-visible footable-first-column">{{ $takafol->hamsar->name }}</td>
                        <td class="footable-visible"><span class="footable-toggle"></span>{{ $takafol->child->name }}</td>
                        <td class="footable-visible">{{ $takafol->relation_stats }}</td>
                        <td class="footable-visible">{{ $takafol->takafol_people_count_and_gender }}</td>
                        <td class="footable-visible">
                            <a href="{{ route('admin.takafols.index') }}" class="btn btn-sm btn-secondary">بازگشت</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>

@endcomponent
