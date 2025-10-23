@php
    // Collect all non-empty images
    $images = collect([
        $post->image,
        $post->img2,
        $post->img3,
        $post->img4,
        $post->img5,
    ])->filter()->values();

    $count = $images->count();
@endphp

<div class="row m-0 p-0 ps-4 pe-5">
    <div class="col-lg-6 col-md-6 col-sm-12">
        @if ($count > 0)
            <div class="row m-0 g-2">
                @if ($count === 1)
                    {{-- Single Image Layout --}}
                    <div class="col-12">
                        <a href="{{ $images[0] }}" data-lightbox="post-gallery-{{ $post->id }}">
                            <div class="img-item rounded"
                                style="background-image: url('{{ $images[0] }}'); height: 400px; background-position: center; background-size: cover;"
                                role="img"
                                aria-label="Post image 1">
                            </div>
                        </a>
                    </div>

                @elseif ($count === 2)
                    {{-- Two Images Layout --}}
                    @foreach ($images as $index => $image)
                        <div class="col-6">
                            <a href="{{ $image }}" data-lightbox="post-gallery-{{ $post->id }}">
                                <div class="img-item rounded"
                                    style="background-image: url('{{ $image }}'); height: 300px; background-position: center; background-size: cover;"
                                    role="img"
                                    aria-label="Post image {{ $index + 1 }}">
                                </div>
                            </a>
                        </div>
                    @endforeach

                @elseif ($count === 3)
                    {{-- Three Images Layout --}}
                    <div class="col-12 mb-2">
                        <a href="{{ $images[0] }}" data-lightbox="post-gallery-{{ $post->id }}">
                            <div class="img-item rounded"
                                style="background-image: url('{{ $images[0] }}'); height: 350px; background-position: center; background-size: cover;"
                                role="img"
                                aria-label="Post image 1">
                            </div>
                        </a>
                    </div>
                    @foreach ($images->slice(1) as $index => $image)
                        <div class="col-6">
                            <a href="{{ $image }}" data-lightbox="post-gallery-{{ $post->id }}">
                                <div class="img-item rounded"
                                    style="background-image: url('{{ $image }}'); height: 200px; background-position: center; background-size: cover;"
                                    role="img"
                                    aria-label="Post image {{ $index + 2 }}">
                                </div>
                            </a>
                        </div>
                    @endforeach

                @elseif ($count === 4)
                    {{-- Four Images Layout --}}
                    @foreach ($images as $index => $image)
                        <div class="col-6">
                            <a href="{{ $image }}" data-lightbox="post-gallery-{{ $post->id }}">
                                <div class="img-item rounded"
                                    style="background-image: url('{{ $image }}'); height: 250px; background-position: center; background-size: cover;"
                                    role="img"
                                    aria-label="Post image {{ $index + 1 }}">
                                </div>
                            </a>
                        </div>
                    @endforeach

                @else
                    {{-- Five or More Images Layout --}}
                    {{-- First Row: 2 Large Images --}}
                    @foreach ($images->take(2) as $index => $image)
                        <div class="col-6">
                            <a href="{{ $image }}" data-lightbox="post-gallery-{{ $post->id }}">
                                <div class="img-item rounded"
                                    style="background-image: url('{{ $image }}'); height: 250px; background-position: center; background-size: cover;"
                                    role="img"
                                    aria-label="Post image {{ $index + 1 }}">
                                </div>
                            </a>
                        </div>
                    @endforeach

                    {{-- Second Row: 3 Medium Images --}}
                    @foreach ($images->slice(2, 3) as $index => $image)
                        <div class="col-4 {{ $loop->last && $count > 5 ? 'position-relative' : '' }}">
                            <a href="{{ $image }}" data-lightbox="post-gallery-{{ $post->id }}">
                                <div class="img-item rounded"
                                    style="background-image: url('{{ $image }}'); height: 200px; background-position: center; background-size: cover;"
                                    role="img"
                                    aria-label="Post image {{ $index + 3 }}">
                                </div>
                                @if ($loop->last && $count > 5)
                                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50 rounded">
                                        <span class="text-white fs-2 fw-bold">+{{ $count - 5 }}</span>
                                    </div>
                                @endif
                            </a>
                        </div>
                    @endforeach

                    {{-- Hidden images for lightbox (if more than 5) --}}
                    @if ($count > 5)
                        @foreach ($images->slice(5) as $image)
                            <a href="{{ $image }}" data-lightbox="post-gallery-{{ $post->id }}" class="d-none"></a>
                        @endforeach
                    @endif
                @endif
            </div>
        @else
            <div class="alert alert-info">No images available</div>
        @endif
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 position-relative">
        <h2>{{ $post->title }}</h2>
         @include('front-end.inc._three_dot_for_action_post')
        <div class="post-description">
            <p class="text-muted">
                {!! $post->description ?? '' !!}
            </p>
        </div>
    </div>
</div>

{{-- Optional: Add this CSS to your stylesheet for better image handling --}}
<style>
    .img-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .img-item:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
</style>
