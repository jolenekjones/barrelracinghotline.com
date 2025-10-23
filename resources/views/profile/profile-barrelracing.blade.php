{{-- Profile layout
   path::: views/layouts/profile-hotlinewebsite.blade.php
  --}}
@extends('layouts.profile-barrelracing')

@section('content')

    <!-- Header Section  -->
    <div class="masthead">
        <div class="container d-flex flex-column align-items-center">

            <!-- Business Name -->
            <h1 class="masthead-heading text-center h1fontstyle">
                {{ $owner->business_name ?? '' }}
            </h1>

            <!-- Profile Image -->
            <img class="img-profile-pic mb-4" src="{{ $owner->profile150x150 ?? url('assets/img/profile-pic.jpg') }}"
                alt="{{ $owner->business_name ?? '' }}" />

            <!-- Contact Info -->
            <div class="contact-info text-center">
                @if (!empty($owner->contacts))
                    <h3>{{ $owner->contacts }}</h3>
                @else
                    <h3>{{ trim(($owner->first_name ?? '') . ' ' . ($owner->last_name ?? '')) }}</h3>
                @endif

                <h4>
                    @if (!empty($owner->city))
                        {{ $owner->city }},
                    @endif {{ $owner->fldstate }}
                </h4>

                {{-- Email --}}
                @if (!empty($owner->email))
                    <p><a href="mailto:{{ $owner->email }}"><i class="fas fa-envelope"></i> e-Mail</a></p>
                @endif

                {{-- Phone (avoid duplicates) --}}
                @php
                    $phone = $owner->phone ?? '';
                    $contactPhone = $owner->contacts ?? '';
                @endphp
                @if (!empty($phone) && $phone !== $contactPhone)
                    <p><a href="tel:{{ $phone }}"><i class="fas fa-phone"></i> {{ $phone }}</a></p>
                @endif
            </div>

            <!-- Share Button -->
            <a class="btn btn-outline-light btn-lg mt-4 p-3 share-btn"
                data-share-title="Barrel Race Hotline | {{ $owner->business_name }} {{ $owner->city ? $owner->city . ', ' : '' }}{{ $owner->fldstate ?? '' }}"
                data-share-url="{{ url('/profile/' . $owner->id) }}"
                href="https://www.facebook.com/sharer/sharer.php?u={{ url('/profile/' . $owner->id) }}" target="_blank"
                rel="noopener">
                <i data-lucide="share-2" class="fs-2"></i> Share
            </a>
            <!-- Social Links -->
            <div class="social-links mt-3">
                @if (!empty($owner->website))
                    <div class="mb-3">
                        <a class="btn btn-dark btn-social mx-1 text-decoration-none" href="{{ $owner->website }}">www</a>
                    </div>
                @endif
                @if (!empty($owner->facebook))
                    <a href="{{ $owner->facebook }}">
                        <i data-lucide="facebook"></i></a>
                @endif
                @if (!empty($owner->utube))
                    <a href="{{ $owner->utube }}" class="btn btn-outline-primary btn-social mx-1">
                        <i data-lucide="youtube"></i>
                    </a>
                @endif

                @if (!empty($owner->linkedin))
                    <a href="{{ $owner->linkedin }}" class="btn btn-outline-primary btn-social mx-1">
                        <i data-lucide="linkedin"></i>
                    </a>
                @endif

                @if (!empty($owner->vimeo))
                    <a href="{{ $owner->vimeo }}" class="btn btn-outline-primary btn-social mx-1">
                        <i data-lucide="video"></i>
                    </a>
                @endif

                @if (!empty($owner->x))
                    <a href="{{ $owner->x }}" class="btn btn-outline-primary btn-social mx-1">
                        <i data-lucide="twitter"></i>
                    </a>
                @endif

                @if (!empty($owner->instagram))
                    <a href="{{ $owner->instagram }}" class="btn btn-outline-primary btn-social mx-1">
                        <i data-lucide="camera"></i>
                    </a>
                @endif

                @if (!empty($owner->tiktok))
                    <a href="{{ $owner->tiktok }}" class="btn btn-outline-primary btn-social mx-1">
                        <i data-lucide="music-2"></i>
                    </a>
                @endif

                <div class="p-1">
                    @if (
                        $owner->verified_status &&
                            $owner->verified_date &&
                            \Carbon\Carbon::parse($owner->verified_date)->gte(\Carbon\Carbon::now()->subYear()))
                        <i data-lucide="calendar-check" class="text-success"></i>
                        <span class="text-success">
                            {{ \Carbon\Carbon::parse($owner->verified_date)->format('m/d/Y') }}
                        </span>
                    @endif
                    @php

                    @endphp

                </div>
            </div>
        </div>
    </div>


    {{-- About --}}
    @if (!empty($owner->about))
        <x-profile-section id="about" icon="info" title="About" variant="dark">
            <div class="p-2">
                <p class="lead">{!! $owner->about !!}</p>
                <div>
                    <img class="img-fluid mb-4" src="{{ $owner->image }}" alt="{{ $owner->business_name ?? '' }}" />
                </div>
            </div>
        </x-profile-section>
    @endif

    {{-- Post Section --}}
    <x-profile-section id="posts" icon="blocks" title="Posts" variant="light">

        {{-- content --}}
        <div id="posts">

            @if ($posts->isNotEmpty())
                @foreach ($posts as $post)
                    @include('profile.inc._post_detail', ['post' => $post])
                @endforeach

                {{--Pagination  --}}
                 <div class="mt-2">
                        {{ $posts->links('vendor.pagination.custom') }}
                    </div>

            @else
                <p>Sorry no records found!
            @endif
        </div>

    </x-profile-section>
    <x-profile-section id="apps" icon="blocks" title="Apps" variant="light">

        {{-- content --}}
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                @guest
                    <div class="alert alert-dark text-start" role="alert">
                        <h4 class="alert-heading">View/Manage Apps</h4>
                        <p>You must be logged in to view apps and info.</p>
                        <p>Available apps include the option to custom design your profile page and add/manage sponsors.</p>
                        <p class="mb-0">
                            <a class="btn btn-outline-light btn-lg" href="{{ url('/login') }}">
                                Log In
                            </a>
                        </p>
                    </div>
                @endguest
            </div>

            <div class="row m-auto">
                <div class="container my-4">
                    {{-- Info / Tips Section (visible only to owner or CM Page Admin the CM Mkt Admin) --}}
                    @if (
                        (isset($owner) && $owner->id === auth()->id()) ||
                            (auth()->check() &&
                                $owner->managed_by === auth()->id() &&
                                auth()->user()->can('Manage Accounts Owned By Others')))
                        <div class="bg-info py-2 px-1 rounded-3 mt-2 mb-2">
                            <div class="mb-3">
                                <a class="btn btn-light d-inline-flex align-items-center gap-2 px-3 py-2 text-info fw-bold shadow-sm"
                                    data-bs-toggle="collapse" href="#profile-help" role="button" aria-expanded="false"
                                    aria-controls="profile-help">
                                    <i data-lucide="info" class="text-info" style="width: 24px; height: 24px;"></i>
                                    Admin Info / Tips
                                </a>
                            </div>

                            <div class="collapse mt-2" id="profile-help">
                                <div class="card card-body border-info bg-white shadow-sm">
                                    {{-- Verification --}}
                                    @php
                                        $isExpired =
                                            $owner->verified_status &&
                                            $owner->verified_date &&
                                            \Carbon\Carbon::parse($owner->verified_date)->lt(
                                                \Carbon\Carbon::now()->subYear(),
                                            );
                                    @endphp

                                    @if ($isExpired)
                                        <div class="mb-3">
                                            <span class="badge bg-danger">
                                                <i data-lucide="calendar-x"></i> Verification Expired
                                            </span>
                                            <a href="{{ url('/manage/users/' . $owner->id . '/edit') }}"
                                                class="btn btn-sm btn-outline-danger ms-2">
                                                <i data-lucide="refresh-ccw"></i> Renew Verification
                                            </a>
                                        </div>
                                    @else
                                        <div class="mb-3">
                                            <span class="badge bg-danger">
                                                <i data-lucide="shield"></i> Not Verified
                                            </span>
                                            <a href="{{ 'https://hotlinewebsites.com/manage/users/' . $owner->id . '/edit' }}"
                                                class="btn btn-sm btn-outline-danger ms-2">
                                                <i data-lucide="check-circle"></i> Submit Verification
                                            </a>
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <a href="{{ 'https://hotlinewebsites.com/manage/users/' . $owner->id . '/edit' }}"
                                            class="btn btn-sm btn-info">
                                            <i data-lucide="pencil"></i> Update Profile & About Section
                                        </a>
                                    </div>


                                    <h5>We built our app with “live edit” so you can update content anywhere.</h5>
                                    <h5>Logged-in users see account messages and manage links; others don’t.</h5>
                                    <h5>
                                        You may add your schedule here AND also add it as an event series for any events
                                        without a flyer.
                                    </h5>
                                    <h5 class="fw-bold">
                                        1) Add event, select <em>Save the Date</em>, and include all schedule dates.<br>
                                        2) Once flyers are ready, replace the schedule image with the flyer.
                                    </h5>


                                    <p class="mb-0">
                                        Questions? <a href="mailto:admin@performancehorsehotline.com">E-Mail Us</a>
                                        or text Jo 940-577-7919.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @auth
                        @if (auth()->check() && ($owner->id === auth()->id() || auth()->user()->hasRole('CM Mkt Admin')))
                            <div class="table-responsive mx-auto" style="max-width: 900px;">
                                <table class="table table-bordered table-striped text-center align-middle bg-white">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-start">App Name</th>
                                            <th>Add</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-start text-dark mt-5">Page Design</td>
                                            <td>~</td>
                                            <td>
                                                @if (auth()->check() &&
                                                        (auth()->user()->hasRole('CM Mkt Admin') ||
                                                            auth()->user()->hasRole('CM Page Admin') ||
                                                            auth()->user()->hasRole('New Subscriber') ||
                                                            auth()->user()->hasRole('Complimentary Premium') ||
                                                            $owner->id == auth()->user()->id))
                                                    <a href="{{ url('/manage/profile-style?user_id=' . $owner->id) }}">
                                                        <i data-lucide="plus"></i>
                                                        <i data-lucide="pencil"></i>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endauth
                </div>
            </div>
            @endif
        </div>

    </x-profile-section>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        /** Delete/Draft Action **/
        function deleteEvent(e, eventID, canManage) {
            e.preventDefault();
            if (!canManage) {
                Swal.fire('Not Allowed!', 'You are not allowed to perform this action.', 'error');
            } else {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to delete this event.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Delete',
                    cancelButtonText: 'No',
                    confirmButtonColor: '#28a745', // green
                    cancelButtonColor: '#dc3545', // red
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Call delete route
                        $.ajax({
                            url: `/manage/event/${eventID}/delete`, // your delete route
                            type: 'POST',
                            data: {
                                _method: 'DELETE',
                                _token: '{{ csrf_token() }}'
                            },
                            beforeSend: function() {
                                Swal.showLoading();
                            },
                            success: function(response) {
                                Swal.fire('Deleted!', 'The Event has been deleted.', 'success')
                                    .then(() => {
                                        location.reload(); // refresh page after alert is closed
                                    });
                                // reload page or remove row
                            },
                            error: function() {
                                Swal.fire('Error!', 'Something went wrong.', 'error');
                            }
                        });
                    }
                    // cancel automatically closes the alert
                });
            }
        }
    </script>
@endpush
