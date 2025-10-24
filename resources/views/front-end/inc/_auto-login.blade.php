@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <iframe id="sso" src="{{ env('HOTLINEWEBSITE_LINK') }}/sso-check" style="display:none;"></iframe>
    <script>
        window.addEventListener('message', (event) => {
            if (event.data.authenticated) {
               const ellipise_icon = '<svg xmlns="http://www.w3.org/2000/svg" style="position:relative; width:auto; height:auto" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-ellipsis-icon lucide-circle-ellipsis"><circle cx="12" cy="12" r="10"/><path d="M17 12h.01"/><path d="M12 12h.01"/><path d="M7 12h.01"/></svg>';
                Swal.fire({
                    title: "You have been logged in.",
                    html: `Click your profile picture to visit your profile page.<br><br>${ellipise_icon}&nbsp;Click the 3 dots to edit your content.`,
                    icon: "info",
                    showCancelButton: true,
                    confirmButtonText: "Yes, login me in"
                }).then(result => {
                    if (result.isConfirmed) {
                        fetch('{{ route("sso.login")}}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json', // Tell Laravel it's JSON
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content // Include CSRF token if you’re logged in
                                },
                                body: JSON.stringify({
                                    id: event.data.user.id
                                })
                            })
                            .then(response => {
                                if (!response.ok) throw new Error('Login failed');
                                return response.json();
                            })
                            .then(() => window.location.reload())
                            .catch(console.error);

                    }
                });
            }
        });

        document.getElementById('sso').onload = () => {
            document.getElementById('sso').contentWindow.postMessage('requestToken', '{{ env('HOTLINEWEBSITE_LINK') }}');
        };
    </script>
@endpush
