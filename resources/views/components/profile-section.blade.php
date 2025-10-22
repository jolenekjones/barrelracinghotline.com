@props([
    'id' => null,
    'icon' => 'square',
    'title' => 'Section Title',
    'variant' => 'light', // default variant
])
{{-- Accepts "light" or "dark" --}}

<section class="section-{{ $variant }}">
    <div class="divider-custom">
        <i data-lucide="{{ $icon }}" class="divider-custom-icon"></i>
        <span class="divider-title h1fontstyle">{{ $title }}</span>
    </div>

    <div class="section-content">
        <div @if($id) id="{{ $id }}" @endif class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
