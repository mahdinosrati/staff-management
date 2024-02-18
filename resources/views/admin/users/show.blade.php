@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">جدول کاربران ادمین</h4>
                <p class="sub-header font-13">
                    بخش مدیریت کاربران ادمین
                </p>

                <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle default footable-loaded footable" data-page-size="7">
                    <thead>
                    <tr>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">آیدی</th>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">عکس</th>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">نام و نام خانوادگی<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">ایمیل<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable">شماره تلفن<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-sortable">وضعیت<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">عملیات<span class="footable-sort-indicator"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="footable-even" style="">
                        <td class="text-center footable-visible footable-first-column">{{ $user->id }}</td>
                        <td class="text-center footable-visible footable-first-column">
                            <img src="{{ asset($user->avatar) }}" alt="Image" width="50" height="50">
                        </td>
                        <td class="footable-visible"><span class="footable-toggle"></span>{{ $user->name }}</td>
                        <td class="footable-visible">{{ $user->email }}</td>
                        <td class="footable-visible">{{ $user->cellphone }}</td>
                        <td class="footable-visible">
                            @if ($user->type == 1)
                                <span>مدیریت</span>
                            @else
                                <span>کاربر عادی</span>
                            @endif
                        </td>
                        <td class="footable-visible">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-secondary">بازگشت</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>

@endcomponent
