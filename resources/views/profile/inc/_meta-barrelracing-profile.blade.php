{{-- resources/views/front-end/inc/_meta-hotlineweb-profile.blade.php --}}

@php
    // Build title
    $profileTitle = '';
    if (!empty($owner->business_name)) {
        $profileTitle .= $owner->business_name . ' - ';
    }
    if (!empty($owner->first_name) || !empty($owner->last_name)) {
        $profileTitle .= trim(($owner->first_name ?? '') . ' ' . ($owner->last_name ?? '')) . ' - ';
    }
    $profileTitle .= 'Profile';

    // Build description (prefer slogan, fallback to default)
    $profileDescription = !empty($owner->slogan)
        ? $owner->slogan
        : 'View ' . ($owner->business_name ?? ($owner->first_name . ' ' . $owner->last_name ?? 'this profile')) . ' profile.';

    // Profile image (fallback if missing)
    $profileImage = !empty($owner->profile150x150)
        ? $owner->profile150x150
        : url('/assets/img/thumb_profile-pic-150.png');

    // Alt text for image
    $profileImageAlt = $owner->business_name ?? trim(($owner->first_name ?? '') . ' ' . ($owner->last_name ?? ''));
@endphp

{{-- Standard Meta --}}
<meta name="description" content="{{ $profileDescription }}" />
<title>{{ $profileTitle }}</title>

{{-- Open Graph --}}
<meta property="og:type" content="profile" />
<meta property="og:title" content="{{ $profileTitle }}" />
<meta property="og:description" content="{{ $profileDescription }}" />
<meta property="og:image" content="{{ $profileImage }}" />
<meta property="og:image:alt" content="{{ $profileImageAlt }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:site_name" content="Barrel Race Hotline" />

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="{{ $profileTitle }}" />
<meta name="twitter:description" content="{{ $profileDescription }}" />
<meta name="twitter:image" content="{{ $profileImage }}" />
