<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('flash::message')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                @yield('content')
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
