@extends('admin.layout')
@section('css_link')
    <link rel="stylesheet" href="{{ admin_js_url('calendar/bootstrap_calendar.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ admin_js_url('jvectormap/jquery-jvectormap-1.2.2.css') }}" type="text/css" />
    @yield('sub_css_link')
@endsection

@section('js')

    <script src="{{ admin_js_url('slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ admin_js_url('charts/easypiechart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ admin_js_url('charts/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ admin_js_url('charts/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ admin_js_url('charts/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ admin_js_url('charts/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ admin_js_url('charts/flot/jquery.flot.grow.js') }}"></script>
    <script src="{{ admin_js_url('charts/flot/demo.js') }}"></script>

    <script src="{{ admin_js_url('calendar/bootstrap_calendar.js') }}"></script>
    <script src="{{ admin_js_url('calendar/demo.js') }}"></script>

    <script src="{{ admin_js_url('sortable/jquery.sortable.js') }}"></script>

    <script src="{{ admin_js_url('jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ admin_js_url('jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ admin_js_url('jvectormap/demo.js') }}"></script>
    <script src="{{ admin_js_url('app.plugin.js') }}"></script>
    @yield('sub_js')

@endsection

@section('body')
    <section class="vbox">
        @include('admin.header')
        <section>
            <section class="hbox stretch">
                <aside class="bg-light lter b-r aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        @include('admin.menu')
                    </section>
                </aside>
                <section id="content">
                    <section class="vbox">
                        @yield('content')
                    </section>
                </section>
            </section>
        </section>
    </section>
@endsection