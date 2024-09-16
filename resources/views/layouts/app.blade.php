
<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} || @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body  class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    
    {{-- header area  --}}
    @include('layouts.header') 
    {{-- header area  --}}

    {{-- content area  --}} 
    @yield('content')  
    {{-- content area  --}}

    {{-- footer area  --}}
    @include('layouts.footer')
    {{-- footer area  --}}

    <!-- Scripts -->
    <!-- Javascript Files
    ================================================== -->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    {{-- <script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script> --}}
    <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    {{-- <script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script> --}}
    <!-- END: Page JS-->

    {{-- <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script> --}}

    <!-- {{-- common js  --}} -->
    <script src="{{asset('common/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('common/js/common-ajax.js')}}"></script>
    <script src="{{asset('common/js/confirm-alert.js')}}"></script>
    <script src="{{asset('common/js/custom-validation.js')}}"></script>
    <script src="{{asset('common/js/toastr.min.js')}}"></script> 


    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('common/js/datatable-function.js')}}"></script>
    <script src="{{asset('common/js/server-side-button-action.js')}}"></script>
     {{-- <script src="{{asset('app-assets/js/scripts/tables/table-datatables-advanced.js')}}"></script>  --}}
    <!-- END: Page Vendor JS-->
    <script src="{{asset('common/js/custom_script.js')}}"></script> 
    <script src="{{ asset('assets/js/scripts.js') }}"> </script>
    <script src="{{ asset('assets/js/modal-scripts.js') }}"> </script>
    @yield('scripts')
</body>
</html>
