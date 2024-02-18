@component('admin.layouts.content', ['title' => 'داشبورد'])
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                            <i class="fe-bar-chart-line- font-22 avatar-title text-success"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span>{{ \App\Models\Karmand::count() }}</span></h3>
                            <p class="text-muted mb-1 text-truncate">تعداد کارمندان</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
</div>
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">درباره برنامه</h4>

            <p class="sub-header">
                این پروژه برای استاد افتخاری تهیه شده در بهمن 1402 توسط مهدی نصرتی
            </p>
        </div> <!-- end card-body -->
    </div> <!-- end card-->
<!-- end row-->
@endcomponent
