@include('admin.layout.navbar')
@include('admin.layout.top')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
@yield('content')
        </div>
    </main>
</div>
</div>

@include('admin.layout.bottom')