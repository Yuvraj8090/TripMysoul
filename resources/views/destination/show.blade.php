<x-guest-layout>
   @php
   $place = \App\Models\Place::find($destinationDetail->Place_id);
   @endphp
   @if($place)
   <section class="groupedcontent" id="homepage-refactored-hero-group" style="
       margin-bottom: 0px !important;
       ">
      <div class="bg-image-and-search">
         <div class="groupedcontent" id="homepage-refactoring-search-carousel">
            <div id="carousel15094" class="carousel slide" data-ride="carousel" data-interval="10000">
               <div class="carousel-inner">
                  @if($place->Video)
                  <div class="carousel-item active">
                     <div class="leadercontent hero-image-slide clearfix" id="leadercontent-0">
                        <div class="image">
                           <video src="{{ asset('storage/' . $place->Video) }}" class="responsive" autoplay muted
                              loop></video>
                        </div>
                     </div>
                  </div>
                  @else
                  @php
                  $alternativePlace = \App\Models\Place::where('name_state',
                  $place->name_state)->whereNotNull('Video')->first();
                  @endphp
                  @if($alternativePlace)
                  <div class="carousel-item active">
                     <div class="leadercontent hero-image-slide clearfix" id="leadercontent-0">
                        <div class="image">
                           <video src="{{ asset('storage/' . $alternativePlace->Video) }}" class="responsive" autoplay
                              muted loop></video>
                        </div>
                     </div>
                  </div>
                  @endif
                  @endif
               </div>
            </div>
         </div>
         @if(!empty($destinationDetail->Offers_avialable))
         @php
         $offer = \App\Models\Offer::find($destinationDetail->Offers_avialable);
         @endphp
         @if($offer)
         @php
         $discountedPrice = $destinationDetail->Price - $offer->amout;
         @endphp
         <div class="container hero-search" id="homepage-refactored-h1-header-trip-finder">
            <div class="search-items">
               <div class="leadercontent brand clearfix" id="leadercontent-offer">
                  <div class="text text-center">
                     @if($discountedPrice)
                     <h1 class="display-4 text-primary font-weight-bold">
                        <i class="fas fa-percentage text-success"></i> Get Up To <span class="text-success">${{
                           $offer->amout }}</span> Off!
                     </h1>
                     <p class="lead font-weight-light">{{ $destinationDetail->name_package }}</p>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         @endif
         @endif
      </div>
   </section>
   @endif
   <div class="container mx-auto my-5">
      <div class="flex flex-col lg:flex-row justify-center gap-5">
         <div class="bg-white p-6 rounded-lg  w-full lg:w-1/2" style="height: fit-content;">
            <div>
               <h1 class="text-2xl font-bold mb-4">{{ $destinationDetail->name_package }}</h1>
               @if(!empty($destinationDetail->overview))
               <div class="content-preview overview">
                  {!! $destinationDetail->overview !!}
               </div>
               <a href="javascript:void(0);" class="read-more text-blue-500 mt-2 block" data-target="overview">View
                  More</a>
               @endif
            </div>
            <div class="mt-4">
               <h3>Detail</h3>
               <div class="flex flex-wrap mt-4">
                  @if(!empty($destinationDetail->pick_drop))
                  <div class="flex items-center bg-black text-white p-2.5 rounded-full w-full lg:w-auto mr-2 mb-2">
                     <i class="fas fa-shuttle-van mr-2"></i>
                     <div>
                        {!! $destinationDetail->pick_drop !!}
                     </div>
                  </div>
                  @endif
                  @if(!empty($destinationDetail->Category))
                  <div class="flex items-center bg-black text-white p-2.5 rounded-full w-full lg:w-auto mr-2 mb-2">
                     <i class="fas fa-tag mr-2"></i>
                     <div>
                        {{ str_replace('_', ' ', $destinationDetail->Category) }}
                     </div>
                  </div>
                  @endif
                  @if(!empty($destinationDetail->height_of_place))
                  <div class="flex items-center bg-black text-white p-2.5 rounded-full w-full lg:w-auto mr-2 mb-2">
                     <i class="fas fa-mountain mr-2"></i>
                     <div>
                        Height of Peak: {{ str_replace('_', ' ', $destinationDetail->height_of_place) }}
                     </div>
                  </div>
                  @endif
                  @if(!empty($destinationDetail->Difficulty))
                  <div class="flex items-center bg-black text-white p-2.5 rounded-full w-full lg:w-auto mr-2 mb-2">
                     <i class="fas fa-signal mr-2"></i>
                     <div>
                        Difficulty: {{ str_replace('_', ' ', $destinationDetail->Difficulty) }}
                     </div>
                  </div>
                  @endif
                  @if(!empty($destinationDetail->Trek_Length))
                  <div class="flex items-center bg-black text-white p-2.5 rounded-full w-full lg:w-auto mr-2 mb-2">
                     <i class="fas fa-ruler mr-2"></i>
                     <div>
                        Trek Length: {{ str_replace('_', ' ', $destinationDetail->Trek_Length) }}
                     </div>
                  </div>
                  @endif
               </div>
            </div>

            @if(!empty($destinationDetail->Itinerary))
            <div class="mt-4">
               <h3 class="text-xl font-semibold mb-2">Itinerary</h3>
               <div class="content-preview Itinerary" style="max-height: 12.5rem; -webkit-line-clamp: 15;">
                  {!! $destinationDetail->Itinerary !!}
               </div>
               <a href="javascript:void(0);" class="read-more text-blue-500 mt-2 block" data-target="Itinerary">View
                  More</a>
            </div>
            @endif
            @if(!empty($destinationDetail->gallery))
            @php
            // Decode the JSON string to an array
            $imageUrls = json_decode($destinationDetail->gallery);
            @endphp
            <h3 class="text-xl font-semibold mb-2">Gallery</h3>
            <div class="row mt-4 container bg-white  rounded-lg  w-full">
               @foreach($imageUrls as $key => $imageUrl)
               <div class="col-md-3 mb-3"
                  style="height: {{ $key == 0 ? '440px' : '220px' }}; width: {{ $key == 0 ? '549px' : '220px' }};">
                  <img src="{{ asset('storage/' . $imageUrl) }}" class="img-fluid rounded" alt="Gallery Image"
                     style="height: 100%; width: 100%;">
               </div>
               @endforeach
            </div>
            @endif
            @if(!empty($destinationDetail->Inclusions))
            <div class="mt-4">
               <h3 class="text-xl font-semibold mb-2">Inclusions</h3>
               <div class="content-preview Inclusions">
                  {!! $destinationDetail->Inclusions !!}
               </div>
               <a href="javascript:void(0);" class="read-more text-blue-500 mt-2 block" data-target="Inclusions">View
                  More</a>
            </div>
            @endif
            @if(!empty($destinationDetail->Exclusions))
            <div class="mt-4">
               <h3 class="text-xl font-semibold mb-2">Exclusions</h3>
               <div class="content-preview Exclusions">
                  {!! $destinationDetail->Exclusions !!}
               </div>
               <a href="javascript:void(0);" class="read-more text-blue-500 mt-2 block" data-target="Exclusions">View
                  More</a>
            </div>
            @endif

            <div class="mt-4">
               <h3 class="text-xl font-semibold mb-2">Things To Pack</h3>
               <div class="content-preview cust_must_be">
                  <x-things-to-carry />

               </div>
               <a href="javascript:void(0);" class="read-more text-blue-500 mt-2 block" data-target="cust_must_be">View
                  More</a>
            </div>

         </div>
         <style>
            .content-preview {
               overflow: hidden !important;
               display: -webkit-box !important;
               -webkit-line-clamp: 3;
               -webkit-box-orient: vertical !important;
               transition: max-height 0.5s ease-out, -webkit-line-clamp 0.5s ease-out !important;
               max-height: 4.5em;
               =
            }

            .read-more {
               display: inline-block;
               margin-top: 10px;
               color: #ffffff;
               padding: 10px 20px;
               border-radius: 30px;
               cursor: pointer;
               text-decoration: none !important;
               background: #000000;
            }

            .expanded {
               -webkit-line-clamp: unset !important;
               max-height: fit-content !important;
               transition: max-height 0.5s ease-out !important;
            }
         </style>
         <script>
            document.addEventListener('DOMContentLoaded', function() {
           const readMoreLinks = document.querySelectorAll('.read-more');
           
           readMoreLinks.forEach(function(link) {
           link.addEventListener('click', function(event) {
           event.preventDefault();
           const targetClass = link.getAttribute('data-target');
           const contentPreview = document.querySelector(`.content-preview.${targetClass}`);
           contentPreview.classList.toggle('expanded');
           if (contentPreview.classList.contains('expanded')) {
              link.textContent = 'View Less';
           } else {
              link.textContent = 'Read More';
           }
           });
           });});
           
           
         </script>
         <div class="bg-gray-100 p-6 rounded-lg shadow-lg w-full lg:w-1/2" style="
           height: fit-content;
           ">
            <div class="h-fit-content">
               <p class="text-lg font-semibold text-gray-700">Starting From</p>
               <div class="flex items-center justify-between" style="
                   margin: 14px;
                   flex-wrap: wrap;">
                  <p class="text-2xl font-bold text-green-600 ">₹ {{ $destinationDetail->Price }} /-</p>
                  <p class="inline-block bg-green-200 text-dark px-3 py-1 rounded-full">Per Person</p>
               </div>
               <!-- HTML -->
               <a href="{{ route('booking.show', $destinationDetail->name_package) }}" id="viewBookingButton"
                  class="view-booking-button">
                  Book Now
               </a>
               <!-- CSS -->
               <style>
                  /* Base button styling */
                  .view-booking-button {
                     display: flex;
                     align-items: center;
                     justify-content: center;
                     padding: 12px 24px;
                     background-color: #000000;
                     /* Primary color */
                     color: white;
                     text-decoration: none;
                     border-radius: 8px;
                     transition: background-color 0.3s, color 0.3s;
                     z-index: 9999999;
                     position: fixed;
                     bottom: 71px;
                     right: 20px;
                  }

                  .view-booking-button:hover {
                     background-color: #0056b3;
                     /* Darker primary color */
                     color: #ffffff;
                  }

                  /* Large screens */
                  @media (min-width: 768px) {
                     .view-booking-button {
                        position: static;
                        margin: 20px auto;
                     }
                  }
               </style>
            </div>
            <div class=" mx-auto bg-white p-6 rounded-lg shadow-lg">
               <?php
                   $today = new DateTime();
                   $currentMonthName = $today->format('F');
                   $nextMonth = (clone $today)->modify('+1 month');
                   $nextMonthName = $nextMonth->format('F');
                   ?>
               <div class="flex" style="align-items: center; justify-content: space-between;flex-wrap: wrap;
                   ">
                  <div>
                     <h3 class="text-xl font-bold mb-4">Batches</h3>
                  </div>
                  <div class="tabs flex space-x-4 mb-4" style="
                       flex-wrap: wrap;
                       ">
                     <button class="tab px-4 py-2 bg-gray-200 mb-4 rounded active" data-tab="all">All</button>
                     <button class="tab px-4 py-2 bg-gray-200 mb-4 rounded" data-tab="current">{{ $currentMonthName
                        }}</button>
                     <button class="tab px-4 py-2 bg-gray-200 mb-4 rounded" data-tab="next">{{ $nextMonthName
                        }}</button>
                  </div>
               </div>
            </div>
            <div class=" mx-auto bg-white p-6 rounded-lg shadow-lg"
               style="max-height: 200px; overflow-x: auto;height:fit-content;">
               <div id="current" class="tab-content hidden">
                  @if($destinationDetail)
                  <?php
                       $matchingPackages = \App\DatesPackage::where('Packages_name', $destinationDetail->id)
                           ->where('date_from', '>', $today)
                           ->whereMonth('date_from', $today->format('m'))
                           ->get();
                       ?>
                  @include('components.dates_packages', ['packages' => $matchingPackages])
                  @else
                  <p class="text-gray-600">No matching data found.</p>
                  @endif
               </div>
               <div id="next" class="tab-content hidden">
                  @if($destinationDetail)
                  <?php
                       $matchingPackages = \App\DatesPackage::where('Packages_name', $destinationDetail->id)
                           ->where('date_from', '>', $today)
                           ->whereMonth('date_from', $nextMonth->format('m'))
                           ->get();
                       ?>
                  @include('components.dates_packages', ['packages' => $matchingPackages])
                  @else
                  <p class="text-gray-600">No matching data found.</p>
                  @endif
               </div>
               <div id="all" class="tab-content">
                  @if($destinationDetail)
                  <?php
                       $matchingPackages = \App\DatesPackage::where('Packages_name', $destinationDetail->id)
                           ->where('date_from', '>', $today)
                           ->get();
                       ?>
                  @include('components.dates_packages', ['packages' => $matchingPackages])
                  @else
                  <p class="text-gray-600">No matching data found.</p>
                  @endif
               </div>
            </div>
            <script>
               document.querySelectorAll('.tab').forEach(tab => {
               tab.addEventListener('click', () => {
               document.querySelectorAll('.tab').forEach(t => t.classList.remove('active', 'bg-white'));
               tab.classList.add('active', 'bg-white');
               document.querySelectorAll('.tab-content').forEach(tc => tc.classList.add('hidden'));
               document.getElementById(tab.dataset.tab).classList.remove('hidden');
               });
               });
            </script>
            <div class="flex items-center justify-between my-5 space-x-5">
               <div class="cursor-pointer" onclick="redirectToWhatsApp()">
                  <div class="w-11 h-11 bg-green-100 rounded-full flex items-center justify-center">
                     <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="44" height="44" rx="22" fill="#E5F7EB" />
                        <path
                           d="M22.0004 12C27.5238 12 32.0007 16.4769 32.0007 22.0003C32.0007 27.5237 27.5238 32.0006 22.0013 32.0006C20.2338 32.0035 18.4975 31.5357 16.9707 30.6454L12.0053 31.9997L13.357 27.0326C12.466 25.5054 11.998 23.7684 12.001 22.0003C12.001 16.4769 16.4778 12 22.0013 12H22.0004ZM18.5933 17.3006L18.3927 17.3083C18.2641 17.3169 18.1373 17.3503 18.0207 17.4086C17.9122 17.47 17.8132 17.5468 17.7267 17.6366C17.6067 17.7489 17.539 17.8474 17.4661 17.9426C17.0965 18.4234 16.8974 19.0135 16.9004 19.62C16.9021 20.1103 17.0298 20.5869 17.2296 21.0334C17.6393 21.9351 18.3121 22.89 19.2001 23.7754C19.4144 23.988 19.6236 24.2023 19.8498 24.4011C20.9532 25.3726 22.2681 26.0732 23.6898 26.4471L24.2581 26.5346C24.4433 26.544 24.6276 26.5303 24.8136 26.5217C25.105 26.5063 25.3896 26.4274 25.6467 26.2903C25.7777 26.2227 25.9056 26.1492 26.0298 26.07C26.0298 26.07 26.0727 26.0426 26.155 25.98C26.2896 25.8806 26.3727 25.8086 26.485 25.692C26.5681 25.6063 26.6393 25.5051 26.695 25.3903C26.773 25.2274 26.851 24.9163 26.8836 24.6574C26.9067 24.4594 26.9007 24.3514 26.8973 24.2846C26.893 24.1774 26.8038 24.066 26.707 24.0189L26.125 23.7583C26.125 23.7583 25.255 23.3794 24.7227 23.1377C24.6671 23.1134 24.6076 23.0995 24.547 23.0966C24.4786 23.0895 24.4094 23.0971 24.3442 23.119C24.279 23.1409 24.2193 23.1765 24.169 23.2234C24.1638 23.2217 24.097 23.2783 23.3736 24.1543C23.3321 24.2101 23.2751 24.2523 23.2096 24.2755C23.1441 24.2987 23.0731 24.3018 23.0058 24.2846C22.9406 24.2671 22.8768 24.2451 22.8147 24.2186L22.5627 24.1106C21.9889 23.8601 21.4577 23.5218 20.9881 23.1077C20.8621 22.9971 20.7447 22.8771 20.6247 22.7614C20.2313 22.3845 19.8884 21.958 19.6047 21.4929L19.5456 21.3986C19.5034 21.3345 19.4695 21.2654 19.4444 21.1929C19.4058 21.0463 19.5044 20.928 19.5044 20.928C19.5044 20.928 19.7478 20.6623 19.861 20.5183C19.9707 20.3786 20.0641 20.2423 20.1241 20.1454C20.2416 19.9551 20.2784 19.7597 20.2167 19.6089C19.9366 18.925 19.6475 18.245 19.3493 17.5689C19.2893 17.4343 19.1153 17.3383 18.9558 17.3194C18.9018 17.3134 18.8478 17.3074 18.7938 17.3031C18.6596 17.2966 18.5251 17.298 18.391 17.3074L18.5924 17.2989L18.5933 17.3006Z"
                           fill="#01AC15" />
                     </svg>
                  </div>
               </div>
               <div class="flex space-x-5">
                  <div id="sendQueryButton"
                     class="send_query flex items-center justify-center max-w-xs py-2 px-4 cursor-pointer bg-white text-black border border-black rounded-full transition duration-300 hover:bg-black hover:text-white">
                     Send Query
                  </div>
                  <div id="queryModal"
                     class="modal fixed top-0 left-0 items-center justify-center w-full h-full bg-gray-800 bg-opacity-50 z-50"
                     style="margin: 0px !important; z-index: 9999999; display: none;">
                     <div class="modal-dialog m-auto max-w-lg w-full bg-white shadow-lg rounded-lg overflow-hidden"
                        style="display: flex; align-items: center; justify-content: center; margin-top: 101px; max-width: 685px; width: auto;">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-body bg-white rounded-lg shadow-lg w-full max-w-4xl mx-4 md:mx-0 md:flex"
                              style="padding: 0px;">
                              <!-- Image on top (hidden on small screens) -->
                              <div class="md:block md:w-1/2 md:h-full" style="height: auto;">
                                 <img src="{{ asset('storage/destination-details/May2024/1br9kFYEsCAyLgYJsYjR.webp') }}"
                                    alt="Image" class="w-full h-full object-cover rounded-lg shadow-lg">
                              </div>
                              <form id="leadsForm"
                                 class="flex flex-col space-y-4 md:w-1/2 p-4 highlight-available-dates">
                                 <button type="button" class="close text-gray-500" data-dismiss="modal"
                                    style="display: flex; flex-direction: row-reverse;">&times;</button>
                                 <div
                                    style="display: flex;align-items:center;justify-content:center;flex-direction:column;">
                                    <img width="140" height="32" src="{{ Voyager::image(setting('site.logo')) }}
                                               " alt="Trip My Soul" style="display: flex;margin-bottom:10px">
                                    <input type="text" id="name" name="name" placeholder="Name"
                                       class="border border-gray-300 rounded-md px-3 py-2 lead">
                                    <input type="email" id="email" name="email" placeholder="Email"
                                       class="border border-gray-300 rounded-md px-3 py-2 lead">
                                    <input type="tel" id="phone_number" name="phone_number" placeholder="Phone Number"
                                       class="border border-gray-300 rounded-md px-3 py-2 lead">
                                    <input type="text" id="package_name" name="package_name" placeholder="Package Name"
                                       class="border border-gray-300 rounded-md px-3 py-2 lead" readonly>
                                    <input type="date" id="package_dates_start" name="package_dates_start"
                                       placeholder="Package Dates Start"
                                       class="border border-gray-300 rounded-md px-3 py-2 lead">
                                    <input type="date" id="package_dates_end" name="package_dates_end"
                                       placeholder="Package Dates End"
                                       class="border border-gray-300 rounded-md px-3 py-2 lead" readonly>
                                    <input type="number" id="number_of_members" name="number_of_members"
                                       placeholder="Number of Members"
                                       class="border border-gray-300 rounded-md px-3 py-2 lead">
                                 </div>
                                 <!-- Add more input fields as needed -->
                                 <button type="submit"
                                    class="bg-blue-500 text-white  px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <script>
                     document.getElementById('sendQueryButton').onclick = function() {
                         var modal = document.getElementById('queryModal');
                         modal.style.display = 'flex';
                         
                         // Set the package name
                         document.getElementById('package_name').value = '{{ $destinationDetail->name_package }}';
                         
                         // Auto-fill form fields if user is logged in
                         @if(auth()->check())
                         document.getElementById('name').value = '{{ auth()->user()->name }}';
                         document.getElementById('email').value = '{{ auth()->user()->email }}';
                         document.getElementById('phone_number').value = '{{ auth()->user()->phone_number }}';
                         @endif
                         
                         // Set the minimum date to today
                         var today = new Date().toISOString().split('T')[0];
                         document.getElementById('package_dates_start').setAttribute('min', today);
                         
                         // Calculate end date based on start date and package duration
                         var startDateInput = document.getElementById('package_dates_start');
                         startDateInput.onchange = function() {
                         var startDate = new Date(startDateInput.value);
                         var endDate = new Date(startDate);
                         endDate.setDate(startDate.getDate() + {{ $destinationDetail->no_of_days }});
                         document.getElementById('package_dates_end').value = endDate.toISOString().split('T')[0];
                         };
                         };
                         
                         document.getElementsByClassName('close')[0].onclick = function() {
                         document.getElementById('queryModal').style.display = 'none';
                         };
                         
                         window.onclick = function(event) {
                         var modal = document.getElementById('queryModal');
                         if (event.target == modal) {
                         modal.style.display = 'none';
                         }
                         };
                         
                         // Handle form submission
                         document.getElementById('leadsForm').addEventListener('submit', function(e) {
                         e.preventDefault();
                         
                         // Collect form data
                         var formData = new FormData(this);
                         
                         // Close the modal before sending the request
                         document.getElementById('queryModal').style.display = 'none';
                         
                         // Send AJAX request
                         fetch('/api/leads', {
                         method: 'POST',
                         body: formData
                         })
                         .then(response => response.json())
                         .then(data => {
                         console.log(data);
                         // Show SweetAlert success message
                         Swal.fire({
                         title: 'Success!',
                         text: 'Your query has been submitted successfully. We will contact you soon or you can call us now.',
                         icon: 'success',
                         confirmButtonText: 'OK'
                         }).then(() => {
                         // Reload page after showing the message
                         location.reload();
                         });
                         })
                         .catch(error => {
                         console.error('Error:', error);
                         // Show SweetAlert error message
                         Swal.fire({
                         title: 'Error!',
                         text: 'There was an error submitting your query. Please try again later.',
                         icon: 'error',
                         confirmButtonText: 'OK'
                         }).then(() => {
                         // Reload page after showing the message
                         location.reload();
                         });
                         });
                         });
                         
                         // Example available dates, replace with your actual dates
                         var availableDates = ["2024-05-25", "2024-05-26", "2024-05-27"];
                         
                         function highlightAvailableDates() {
                         var dateInput = document.getElementById('package_dates_start');
                         dateInput.addEventListener('click', function() {
                         setTimeout(function() {
                         var datePicker = document.querySelector('.highlight-available-dates input[type="date"]');
                         var calendarDays = datePicker.shadowRoot.querySelectorAll('.highlight-available-dates input[type="date"]::-webkit-calendar-picker-indicator');
                         calendarDays.forEach(function(day) {
                         if (availableDates.includes(day.value)) {
                         day.style.backgroundColor = 'green';
                         }
                         });
                         }, 0);
                         });
                         }
                         
                         highlightAvailableDates();
                  </script>
               </div>
            </div>
            <script>
               function redirectToWhatsApp() {
               window.location.href = "https://wa.me/919258360243";
               }
            </script>
         </div>
      </div>
</x-guest-layout>