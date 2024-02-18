<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset(auth()->user()->avatar) }}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="{{ route('admin.') }}" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block">
                    {{ auth()->user()->name }}
                </a>
            </div>
            <p class="text-muted">
                مدیریت
            </p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">فهرست</li>

                <li>
                    <a href="{{ route('admin.') }}">
                        <i data-feather="airplay"></i>
                        <span> داشبورد </span>
                    </a>
                </li>
                <hr>
                <li class="menu-title">فهرست مدیریت</li>

                <li>
                    <a href="{{ route('admin.users.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت ادمین </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.karmands.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت کارمند </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.personals.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت پرسنلی </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.hamsars.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت همسر </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.children.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت فرزند </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.takafols.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت وضعیت تکفل </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.sokoonats.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت اطلاعات سکونت </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.encouragements.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت مرخصی تشویقی </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.leaves.index') }}">
                        <i class="fe-settings"></i>
                        <span> مدیریت مرخصی </span>
                    </a>
                </li>
                <hr>
                <li class="menu-title">فهرست ایجاد</li>

                <li>
                    <a href="{{ route('admin.users.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد ادمین </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.karmands.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد کارمند </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.personals.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد پرسنلی </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.hamsars.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد همسر </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.children.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد فرزند </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.takafols.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد وضعیت تکفل </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.sokoonats.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد اطلاعات سکونت </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.encouragements.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد مرخصی تشویقی </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.leaves.create') }}">
                        <i class="fe-user-plus"></i>
                        <span> ایجاد مرخصی </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
