
     <div class="dropdown horse-action-button position-absolute top-0 end-0 m-0">
         <button class="btn btn-sm btn-light rounded-circle shadow-sm" type="button" id="dropdownMenuButton"
             data-bs-toggle="dropdown" aria-expanded="false">
             <span data-lucide="ellipsis"></span>
         </button>
         <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownMenuButton">
             <li>
                 @if (
                     (auth()->check() &&
                         auth()->user()->hasRole(['Super Admin', 'CM Mkt Admin'])) ||
                         (auth()->check() && auth()->user()->id == $post->owned_by))
                     <a class="dropdown-item" href="{{ env('HOTLINEWEBSITE_LINK') }}/horsehotline/manage/horse-post-update/{{ $post->id }}/edit">
                         <span data-lucide="pencil"></span>&nbsp;Edit Post
                     </a>
                 @elseif(auth()->check())
                     <a class="dropdown-item un-authorized" href="#">
                         <span data-lucide="pencil"></span>&nbsp;Edit Post
                     </a>
                 @else
                     <a class="dropdown-item login"
                         href="{{ env('HOTLINEWEBSITE_LINK') }}?site-url={{ url()->current() }}#posts">
                         <span data-lucide="pencil"></span>&nbsp;Edit Post
                     </a>
                 @endif
             </li>
             <li>
                 <div class="dropdown-item text-danger cursor-pointer"
                     onclick="confirmPostAction({{ $post->id }})">
                     <span data-lucide="trash"></span>&nbsp; Delete / Draft
                 </div>
             </li>
             <li>
                 <a class="dropdown-item" href="#">
                     <span data-lucide="share-2"></span>&nbsp;Share Post
                 </a>
             </li>
         </ul>
     </div>
 @push('scripts')
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
         /** User Permissions for Horse Actions **/
         window.horsePermissions = {
             canManage: {{ (auth()->check() && auth()->user()->hasRole('Super Admin')) || (auth()->check() && auth()->user()->id == $horse->customerid) ? 'true' : 'false' }}
         };

         /** Make It Feature Action **/
         function makeItFeature(horseId) {
             if (!window.horsePermissions.canManage) {
                 Swal.fire('Not Allowed!', 'You are not allowed to perform this action.', 'error');
             } else {
                 Swal.fire({
                     title: 'Are you sure?',
                     text: "You want to feature this horse?",
                     icon: 'warning',
                     showCancelButton: true,
                     showDenyButton: true,
                     confirmButtonText: 'Yes',
                     cancelButtonText: 'Cancel',
                     confirmButtonColor: '#28a745', // green
                     denyButtonColor: '#6c757d', // secondary gray
                     cancelButtonColor: '#dc3545', // red
                 }).then((result) => {
                     if (result.isConfirmed) {
                         // Call delete route
                         $.ajax({
                             url: `/horses/${horseId}/make-featured`, // your delete route
                             type: 'POST',
                             data: {
                                 _token: $('meta[name="csrf-token"]').attr('content')
                             },
                             beforeSend: function() {
                                 Swal.showLoading();
                             },
                             success: function(response) {
                                 Swal.fire('Featured!', 'The horse has been marked as featured.',
                                         'success')
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

                 })
             }
         }

         $('.un-authorized').on('click', function(e) {
             e.preventDefault();
             Swal.fire({
                 title: 'Access Denied',
                 html: "You don't have permission to delete this horse.<br><small>Please contact the owner or administrator.</small>",
                 icon: 'error',
                 showCancelButton: true,
                 confirmButtonText: 'Contact Support',
                 cancelButtonText: 'Go Back',
                 confirmButtonColor: '#007bff', // blue
                 cancelButtonColor: '#6c757d', // gray
             }).then((result) => {
                 if (result.isConfirmed) {
                     // Redirect to contact page
                     window.location.href = '/contact';
                 } else {
                     // Go back to previous page
                     window.history.back();
                 }
             });
         })
         /** Delete/Draft Action **/
         function confirmPostAction(postid) {
             if (!window.horsePermissions.canManage) {
                 Swal.fire('Not Allowed!', 'You are not allowed to perform this action.', 'error');
             } else {
                 Swal.fire({
                     title: 'Are you sure?',
                     text: "You want to delete this post.",
                     icon: 'warning',
                     showCancelButton: true,
                     showDenyButton: true,
                     confirmButtonText: 'Yes, Delete',
                     denyButtonText: 'Save as Draft',
                     cancelButtonText: 'Cancel',
                     confirmButtonColor: '#28a745', // green
                     denyButtonColor: '#6c757d', // secondary gray
                     cancelButtonColor: '#dc3545', // red
                 }).then((result) => {
                     if (result.isConfirmed) {
                         // Call delete route
                         $.ajax({
                             url: `/posts/${postid}/delete`, // your delete route
                             data: {
                                 _token: $('meta[name="csrf-token"]').attr('content')
                             },
                             beforeSend: function() {
                                 Swal.showLoading();
                             },
                             success: function(response) {
                                 Swal.fire('Deleted!', 'The Post has been deleted.', 'success')
                                     .then(() => {
                                         location.reload(); // refresh page after alert is closed
                                     });
                                 // reload page or remove row
                             },
                             error: function() {
                                 Swal.fire('Error!', 'Something went wrong.', 'error');
                             }
                         });
                     } else if (result.isDenied) {
                         // Call draft route
                         $.ajax({
                             url: `/posts/${postid}/draft`, // your draft route
                             type: 'POST',
                             data: {
                                 _token: $('meta[name="csrf-token"]').attr('content')
                             },
                             beforeSend: function() {
                                 Swal.showLoading();
                             },
                             success: function(response) {
                                 Swal.fire('Saved!', 'The post has been moved to draft.', 'success')
                                     .then(() => {
                                         location.reload(); // refresh page after alert is closed
                                     });
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
