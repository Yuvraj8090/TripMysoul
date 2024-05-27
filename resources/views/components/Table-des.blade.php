<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
   .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
   }

   .close {
      font-size: 1.5rem;
      background: transparent;
      border: none;
   }
</style>
<div class="container mt-5">
   <div class="card">
      <div class="card-body">
         <h2 class="card-title">Departures</h2>
         @if($destinationDetail)
         <?php
           $matchingPackages = \App\DatesPackage::where('Packages_name', $destinationDetail->id)->get();
           ?>
         <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
               <thead class="thead-dark">
                  <tr>
                     <th>Date From</th>
                     <th>Date To</th>
                     <th>Availability<br><small style="font-size: 12px; font-weight: lighter;">Remaining
                           Spaces</small></th>
                     <th>Price Per Person</th>
                     <th>Apply or Request</th>
                  </tr>
               </thead>
               <tbody>
                  @php
                  $currentMonth = null;
                  $today = new DateTime();
                  $user = Auth::user();
                  @endphp
                  @foreach($matchingPackages as $package)
                  @php
                  $dateFrom = new DateTime($package->date_from);
                  $dateTo = new DateTime($package->date_to);
                  $packageMonth = $dateTo->format('M Y');
                  $packagePassed = $dateFrom < $today; $discountedPrice=null; $offerAvailable=$package->
                     Offer_available;
                     if ($offerAvailable) {
                     $offer = App\Models\Offer::find($offerAvailable);
                     if ($offer) {
                     $discountedPrice = $destinationDetail->Price - $offer->amout;
                     }
                     }
                     @endphp
                     @if($currentMonth !== $packageMonth && !$packagePassed)
                     @php
                     $currentMonth = $packageMonth;
                     @endphp
                     <tr class="table-secondary text-center">
                        <td colspan="5" style="font-weight: bold;">{{ $currentMonth }}</td>
                     </tr>
                     @endif
                     @if (!$packagePassed)
                     <tr>
                        <td>{{ $dateFrom->format('Y-m-d') }}</td>
                        <td>{{ $dateTo->format('Y-m-d') }}</td>
                        <td>{{ $package->no_person }} <i class="fas fa-users" style="color: #007bff;"></i></td>
                        <td>
                           @if(isset($discountedPrice))
                           ₹ {{ number_format($discountedPrice, 2) }} <del>₹ {{
                              number_format($destinationDetail->Price, 2) }}</del>
                           @else
                           ₹ {{ number_format($destinationDetail->Price, 2) }}
                           @endif
                        </td>
                        <td>
                           <button class="btn btn-primary request-button" data-toggle="modal" data-target="#LeadModal"
                              data-package-name="{{ $destinationDetail->name_package}}"
                              data-date-from="{{ $dateFrom->format('Y-m-d') }}"
                              data-date-to="{{ $dateTo->format('Y-m-d') }}">Request
                              <i class="fas fa-paper-plane" style="color: #fff;"></i></button>
                        </td>
                     </tr>
                     @endif
                     @endforeach
               </tbody>
            </table>
         </div>
         @else
         <p class="card-text">No matching data found.</p>
         @endif
      </div>
   </div>
</div>


<!-- Modal Form -->
<div class="modal fade" id="LeadModal" tabindex="-1" aria-labelledby="LeadLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="LeadLabel"><i class="fas fa-edit mr-2"></i>Request Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="leadForm">
               @csrf
               <div class="form-group">
                  <label for="name"><i class="fas fa-user mr-2"></i>Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}"
                     required>
               </div>
               <div class="form-group">
                  <label for="email"><i class="fas fa-envelope mr-2"></i>Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ $user->email ?? '' }}"
                     required>
               </div>
               <div class="form-group">
                  <label for="phone_number"><i class="fab fa-whatsapp mr-2"></i>Whatsapp Number</label>
                  <input type="text" class="form-control" id="phone_number" name="phone_number" required>
               </div>
               <div class="form-group">
                  <label for="package_name"><i class="fas fa-box mr-2"></i>Package Name</label>
                  <input type="text" class="form-control" id="package_name" name="package_name" required readonly>
               </div>
               <div class="form-group">
                  <label for="package_dates_start"><i class="far fa-calendar-alt mr-2"></i>Package Start Date</label>
                  <input type="date" class="form-control" id="package_dates_start" name="package_dates_start" required
                     readonly>
               </div>
               <div class="form-group">
                  <label for="package_dates_end"><i class="far fa-calendar-alt mr-2"></i>Package End Date</label>
                  <input type="date" class="form-control" id="package_dates_end" name="package_dates_end" required
                     readonly>
               </div>
               <div class="form-group">
                  <label for="number_of_members"><i class="fas fa-users mr-2"></i>Number of Members</label>
                  <input type="number" class="form-control" id="number_of_members" name="number_of_members" required>
               </div>
               <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- AJAX form submission -->
<script>
   $(document).ready(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                  'Content-Type': 'application/json',
                  'Accept': 'application/json'
              }
          });
  
          // Prepopulate the form fields with cached user data if available
          var cachedUser = {
              name: '{{ $user->name ?? '' }}',
              email: '{{ $user->email ?? '' }}',
              phone_number: '{{ $user->phone_number ?? '' }}'
          };
  
          $('#name').val(cachedUser.name);
          $('#email').val(cachedUser.email);
          $('#phone_number').val(cachedUser.phone_number);
  
          // Handle the Request button click
          $('.request-button').on('click', function() {
              var packageName = $(this).data('package-name');
              var dateFrom = $(this).data('date-from');
              var dateTo = $(this).data('date-to');
  
              $('#package_name').val(packageName);
              $('#package_dates_start').val(dateFrom);
              $('#package_dates_end').val(dateTo);
          });
  
          // Handle form submission
          $('#leadForm').on('submit', function(e) {
              e.preventDefault();
  
              var phoneNumber = $('#phone_number').val().trim();
              var phoneNumberPattern = /^\+91\d{10}$/;
  
              if (!phoneNumberPattern.test(phoneNumber)) {
                  Swal.fire({
                      icon: 'error',
                      title: 'Invalid Phone Number',
                      text: 'Please enter a valid 10-digit Indian phone number starting with +91.',
                      confirmButtonText: 'OK'
                  });
                  return;
              }
  
              var formData = {
                  name: $('#name').val(),
                  email: $('#email').val(),
                  phone_number: phoneNumber,
                  package_name: $('#package_name').val(),
                  package_dates_start: $('#package_dates_start').val(),
                  package_dates_end: $('#package_dates_end').val(),
                  number_of_members: $('#number_of_members').val()
              };
  
              $.ajax({
                  type: 'POST',
                  url: '/api/leads',
                  data: JSON.stringify(formData),
                  success: function(response) {
                      Swal.fire({
                          icon: 'success',
                          title: 'Form Submitted!',
                          text: 'We will contact you soon.',
                          confirmButtonText: 'OK'
                      });
                      $('#LeadModal').modal('hide');
                      // Optionally, reset the form
                      $('#leadForm')[0].reset();
                  },
                  error: function(error) {
                      if (error.responseJSON && error.responseJSON.errors) {
                          // Handle validation errors
                          let errors = error.responseJSON.errors;
                          let errorMessage = '';
                          for (let field in errors) {
                              errorMessage += errors[field].join(', ') + '\n';
                          }
                          Swal.fire({
                              icon: 'error',
                              title: 'Validation Errors',
                              text: errorMessage,
                              confirmButtonText: 'OK'
                          });
                      } else {
                          Swal.fire({
                              icon: 'error',
                              title: 'Error!',
                              text: 'Error submitting form!',
                              confirmButtonText: 'OK'
                          });
                      }
                  }
              });
          });
      });
</script>