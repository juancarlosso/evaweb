<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.partials.favicon')
    @include('layouts.partials.head')
    @yield('estilos')
</head>

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">

    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layouts.partials.header')
                @include('layouts.partials.toolbar')
                <!--begin::Container-->
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    @yield('contenido')
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        @include('layouts.partials.footer')
        <!--end::Wrapper-->
    </div>
    <!--end::Root-->
    @include('layouts.partials.activitylogs')
    @include('layouts.partials.chat')
    @include('layouts.partials.scrolltop')
    @include('layouts.partials.modals')
    @include('layouts.partials.footer-scripts')
    @yield('scripts')
</body>

</html>