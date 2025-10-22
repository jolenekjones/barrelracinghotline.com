<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    @include('profile.inc._meta-barrelracing-profile')


      <!-- Base Fonts (global across themes) -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- User-selected dynamic styles -->
@stack('styles')

<!-- Fallbacks if nothing pushed -->
@isset($owner)
    @php
        $profile_font   = $owner->font   ?? 'profile_font.css';
        $profile_colors = $owner->colors ?? 'profile_colors.css';
        $profile_styles = 'base.css'; // always base.css now
    @endphp

    <link href="{{ url('/assets/css/' . $profile_font) }}" rel="stylesheet" />
    <link href="{{ url('/assets/css/' . $profile_colors) }}" rel="stylesheet" />
    <link href="{{ url('/assets/css/' . $profile_styles) }}" rel="stylesheet" />
@endisset

</head>
<body id="page-top">

    <!-- Profile Navigation -->
    @include('profile.inc._profile_barrelracing_nav')

    <!-- Main Content -->
  @yield('content')

    <!-- Footer & Page Views -->
    @include('profile.inc._page_views_barrelracing')
    @include('profile.inc._profile_footer_barrelracing')

    <!-- Copyright -->
    <div class="copyright py-4 text-center">
        <div class="container">
            <small>
                @php
                    $startYear = 2024;
                    $currentYear = date('Y');
                @endphp
                <p>&copy; {{ $startYear }}{{ $startYear != $currentYear ? '–' . $currentYear : '' }}
                    <a href="https://bhotmarketing.com">BHot Marketing</a> All rights reserved.
                </p>
            </small>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Scroll To Top --}}
    @include('layouts._scroll-to-top')

    {{-- Lucide icons --}}
    @include('layouts.inc._lucide')

    <!-- Conditional Lightbox Scripts -->
    @stack('lightbox-scripts')

    <!-- Additional page-specific scripts -->
    @stack('scripts')
</body>
</html>
