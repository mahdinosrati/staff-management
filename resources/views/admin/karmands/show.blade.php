@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">جدول کارمندان</h4>
                <p class="sub-header font-13">
                    بخش مدیریت کارمندان
                </p>

                <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle default footable-loaded footable" data-page-size="7">
                    <thead>
                    <tr>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">عکس</th>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">نام</th>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">نام خانوادگی<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">نام پدر<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable">شماره شناسنامه<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-sortable">محل صدور<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">تاریخ تولد<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">محل تولد<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">کدملی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">گروه خونی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">میزان تحصیلات<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">رشته تحصیلی<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">شماره تلفن<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">شماره خانه<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">عملیات<span class="footable-sort-indicator"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="footable-even" style="">
                        <td class="text-center footable-visible footable-first-column">
                            <img src="{{ asset($karmand->avatar) }}" alt="Image" width="50" height="50">
                        </td>
                        <td class="text-center footable-visible footable-first-column">{{ $karmand->name }}</td>
                        <td class="footable-visible"><span class="footable-toggle"></span>{{ $karmand->family }}</td>
                        <td class="footable-visible">{{ $karmand->father_name }}</td>
                        <td class="footable-visible">{{ $karmand->sh_shenas }}</td>
                        <td class="footable-visible">{{ $karmand->sodoor_loc }}</td>
                        <td class="footable-visible">{{ $karmand->birth }}</td>
                        <td class="footable-visible">{{ $karmand->birth_loc }}</td>
                        <td class="footable-visible">{{ $karmand->kodmeli }}</td>
                        <td class="footable-visible">{{ $karmand->blood_type }}</td>
                        <td class="footable-visible">{{ $karmand->edu_level }}</td>
                        <td class="footable-visible">{{ $karmand->edu_field }}</td>
                        <td class="footable-visible">{{ $karmand->cellphone }}</td>
                        <td class="footable-visible">{{ $karmand->home_phone }}</td>
                        <td class="footable-visible">
                            <a href="{{ route('admin.karmands.index') }}" class="btn btn-sm btn-secondary">بازگشت</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>

@endcomponent
