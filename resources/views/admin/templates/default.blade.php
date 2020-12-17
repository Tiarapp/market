<!DOCTYPE html>
<html lang="en">

@include('admin.templates.partials._head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin/templates/partials/_header')

        @include('admin/templates/partials/_sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('admin/templates/partials/_footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.templates.partials._script')
</body>

</html>