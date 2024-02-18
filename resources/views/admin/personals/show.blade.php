@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">جدول اطلاعات پرسنلی</h4>
                <p class="sub-header font-13">
                    بخش مدیریت اطلاعات پرسنلی
                </p>

                <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle default footable-loaded footable" data-page-size="7">
                    <thead>
                    <tr>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">کارمند</th>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">شماره پرسنلی</th>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">شماره کلاسه<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">مقام فعلی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable">آخرین ارتقا<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-sortable">مقام سازمانی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">تاریخ استخدام<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">نوع جذب<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">نوع عضویت<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">آخرین مدرک تحصیلی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">رشته تحصیلی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">شماره شناسنامه<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">وضعیت خدمت<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">وضعیت جسمانی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">عملیات<span class="footable-sort-indicator"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="footable-even" style="">
                        <td class="text-center footable-visible footable-first-column">{{ $personal->karmand->name }}</td>
                        <td class="text-center footable-visible footable-first-column">{{ $personal->sh_personeli }}</td>
                        <td class="footable-visible"><span class="footable-toggle"></span>{{ $personal->sh_class }}</td>
                        <td class="footable-visible">{{ $personal->current_rank }}</td>
                        <td class="footable-visible">{{ $personal->lastp }}</td>
                        <td class="footable-visible">{{ $personal->org_rank }}</td>
                        <td class="footable-visible">{{ $personal->hdate }}</td>
                        <td class="footable-visible">{{ $personal->recruitment_type }}</td>
                        <td class="footable-visible">{{ $personal->register_type }}</td>
                        <td class="footable-visible">{{ $personal->last_edu_degree }}</td>
                        <td class="footable-visible">{{ $personal->edu_field }}</td>
                        <td class="footable-visible">{{ $personal->sh_shenas }}</td>
                        <td class="footable-visible">{{ $personal->duty_status }}</td>
                        <td class="footable-visible">{{ $personal->physical_condition }}</td>
                        <td class="footable-visible">
                            <a href="{{ route('admin.personals.index') }}" class="btn btn-sm btn-secondary">بازگشت</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>

@endcomponent
