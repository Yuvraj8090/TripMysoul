<x-guest-layout>
    @php
    $place = \App\Models\Place::find($destinationDetail->Place_id);
    @endphp
    @if($place)
    <section class='groupedcontent None' id='homepage-refactored-hero-group' style="margin-bottom: 0px!important;">
        <div class='bg-image-and-search'>
            <div class='groupedcontent None' id='homepage-refactoring-search-carousel'>
                <div class=''>
                    <div id='carousel15094' class='carousel slide' data-interval='10000'>
                        <div class='carousel-inner'>
                            <div class='active item'>
                                <div class='leadercontent hero-image-slide clearfix' id='leadercontent-15579'>
                                    <div class='image'><video src='{{ asset(' storage/' . $place->Video) }}'
                                            class='responsive' alt=""
                                            autoplay muted loop ></video>
                                    </div>
                                </div>
                            </div>
                            <div class='item'>
                                <div class='leadercontent hero-image-slide clearfix' id='leadercontent-15578'>
                                    <div class='image'><video src='{{ asset(' storage/' . $place->Video) }}'
                                            class='responsive' alt=""
                                            autoplay muted loop ></video>
                                    </div>
                                </div>
                            </div>
                            <div class='item'>
                                <div class='leadercontent hero-image-slide clearfix' id='leadercontent-15574'>
                                    <div class='image'><video src='{{ asset(' storage/' . $place->Video) }}'
                                            class='responsive' alt=""
                                            autoplay muted loop ></video>
                                    </div>
                                </div>
                            </div>
                            <div class='item'>
                                <div class='leadercontent hero-image-slide clearfix' id='leadercontent-15577'>
                                    <div class='image'><video src='{{ asset(' storage/' . $place->Video) }}'
                                            class='responsive' alt=""
                                            data-src-small='{{ asset('storage/' . $place->Video) }}'
                                            data-src-medium='{{ asset('storage/' . $place->Video) }}'
                                            data-src-xlarge='{{ asset('storage/' . $place->Video) }}'
                                            data-src-large='{{ asset('storage/' . $place->Video) }}' autoplay muted loop
                                            ></video>
                                    </div>
                                </div>
                                <video src="{{ asset('storage/' . $place->Video) }}" autoplay muted loop
                                    style="width: -webkit-fill-available;"></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(!empty($destinationDetail->Offers_avialable))
            <div class='groupedcontent container hero-search' id='homepage-refactored-h1-header-trip-finder'>
                <div class='search-items'>
                    <div class='leadercontent brand clearfix' id='leadercontent-15099'>
                        <div class='text'>
                            @php
                            // Fetch offer details using offer ID
                            $offer = App\Models\Offer::find($destinationDetail->Offers_avialable);
                            @endphp
                            @if($offer)
                            @php
                            $discountedPrice = $destinationDetail->Price - $offer->amout;
                            @endphp
                            @if($discountedPrice)
                            <h1> Get Up To {{ $offer->amout }}
                            </h1>
                            @endif
                            <h1>{!! $destinationDetail->name_package !!}</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @else
        @endif
    </section>
    <div class="container mx-auto px-4">
        <div class="card my-4" style="
          border: none;
          ">
            <div class="card-body">
                <h1 class="card-title text-xl font-bold mb-2">Highlights of {{ $destinationDetail->name_package }}</h1>
                <p class="card-text">{{ $destinationDetail->no_of_days }} Days, {{ $destinationDetail->pick_drop }}</p>
                <div class="flex" role="group" aria-label="Overview, Itinerary, and Customer Must Be">
                    <button class="btn" style="border-bottom: 3px solid #039CDA; color: #039CDA;background:none"
                        onclick="toggleContent('overviewContent')">Overview</button>
                    <button class="btn" style="border-bottom: 3px solid #039CDA; color: #039CDA;background:none"
                        onclick="toggleContent('itineraryContent')">Itinerary</button>
                    <button class="btn" style="border-bottom: 3px solid #039CDA; color: #039CDA;background:none"
                        onclick="toggleContent('custMustBeContent')">Customer Must Be</button>
                </div>
                <div class="container" style="display: flex">
                    <div class="row col-12 col-md-6 col-sm-6" style="
                   flex-direction: column;
                   ">
                        <div id="overviewContent" class="col-md-10 mt-3">
                            <p>{!! $destinationDetail->overview !!}</p>
                        </div>
                        <div id="custMustBeContent" class="col-md-10 mt-3">
                            <p>{!! $destinationDetail->cust_must_be !!}</p>
                        </div>
                    </div>
                    <div id="myModal" class="modal" tabindex="-1" style="height: auto;margin-top: 100px;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact Form</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/submit-form" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message:</label>
                                            <textarea class="form-control" id="message" name="message"
                                                rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        if (window.innerWidth < 768) {
                   
                   setTimeout(function() {
                   var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                   myModal.show();
                   }, 5000); // Show modal after 5 seconds
                   }
                    </script>
                    <style>
                        @media screen and (max-width: 768px) {
                            #form-full {
                                display: none;
                            }
                        }
                    </style>
                    <div class="row justify-content-center" id="form-full" style="height: 756px; width: 540px;">
                        <div class="col-md-6 mt-3">
                            <form action="/submit-form" method="POST"
                                style=" border-radius: 9px; height: 756px; width: 540px; padding:16px 24px ; box-shadow: 4px 4px 16px 7px rgba(0, 0, 0, 0.25);">
                                <p style="font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 500;">
                                    Starting From
                                    <span class="m2">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_522_2000)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.75 8C16.75 12.4184 13.1684 16 8.75 16C4.3316 16 0.75 12.4184 0.75 8C0.75 3.5816 4.3316 0 8.75 0C13.1684 0 16.75 3.5816 16.75 8ZM9.55 4.8C9.55 5.01217 9.46571 5.21566 9.31569 5.36569C9.16566 5.51571 8.96217 5.6 8.75 5.6C8.53783 5.6 8.33434 5.51571 8.18431 5.36569C8.03429 5.21566 7.95 5.01217 7.95 4.8C7.95 4.58783 8.03429 4.38434 8.18431 4.23431C8.33434 4.08429 8.53783 4 8.75 4C8.96217 4 9.16566 4.08429 9.31569 4.23431C9.46571 4.38434 9.55 4.58783 9.55 4.8ZM7.95 8C7.95 7.78783 8.03429 7.58434 8.18431 7.43431C8.33434 7.28429 8.53783 7.2 8.75 7.2C8.96217 7.2 9.16566 7.28429 9.31569 7.43431C9.46571 7.58434 9.55 7.78783 9.55 8V12C9.55 12.2122 9.46571 12.4157 9.31569 12.5657C9.16566 12.7157 8.96217 12.8 8.75 12.8C8.53783 12.8 8.33434 12.7157 8.18431 12.5657C8.03429 12.4157 7.95 12.2122 7.95 12V8Z"
                                                    fill="#212529" fill-opacity="0.32" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_522_2000">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(0.75)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </p>
                                <div class="d-flex" style="
                            justify-content: space-between;
                            ">
                                    <p style="font-size: 40px;font-family: 'Poppins', sans-serif; font-weight: 500;">₹
                                        {{ $destinationDetail->Price }}
                                    </p>
                                    <span
                                        style="width: 104.98px;height:34px;border-radius:99px;display: flex;justify-content: center;background:#DAEFFF;align-items: center;">
                                        <p
                                            style=" margin:0px !important;font-family: 'Poppins', sans-serif;font-weight: 400;font-size:14px">
                                            Per Person
                                        </p>
                                    </span>
                                </div>
                                <button type=""
                                    style="background:#000000;width: -webkit-fill-available;border-radius: 34px;display: flex;align-items: center;justify-content: center;padding: inherit;color: white;font-size: 16px;line-height: 26px;font-family: 'Poppins',sans-serif;font-weight: 600;margin-top: 10px;">Book
                                    Now</button>
                                <button type=""
                                    style="background:#000000;width: fit-content;border-radius: 34px;display: flex;align-items: center;justify-content: center;padding: inherit;color: white;font-size: 16px;line-height: 12px;font-family: 'Poppins',sans-serif;font-weight: 600;margin-top: 10px;">Add
                                    More</button>
                                <div class="d-flex"
                                    style="margin-top: 25px;justify-content: space-between;border-bottom: 1px solid #00000059;padding: 0px 0px 12px 0px;">
                                    <span
                                        style="font-size:20px;font-family: 'Poppins', sans-serif; font-weight: 500;">Pricing</span>
                                    <span>
                                        <span>
                                            <span style="
                                     font-size: 16px;
                                     font-weight: 500;
                                     font-family: 'Poppins',sans-serif;
                                     ">
                                                Occupancy
                                                <span>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.9805 8C16.9805 12.4184 13.3989 16 8.98047 16C4.56207 16 0.980469 12.4184 0.980469 8C0.980469 3.5816 4.56207 0 8.98047 0C13.3989 0 16.9805 3.5816 16.9805 8ZM9.78047 4.8C9.78047 5.01217 9.69618 5.21566 9.54615 5.36569C9.39612 5.51571 9.19264 5.6 8.98047 5.6C8.7683 5.6 8.56481 5.51571 8.41478 5.36569C8.26475 5.21566 8.18047 5.01217 8.18047 4.8C8.18047 4.58783 8.26475 4.38434 8.41478 4.23431C8.56481 4.08429 8.7683 4 8.98047 4C9.19264 4 9.39612 4.08429 9.54615 4.23431C9.69618 4.38434 9.78047 4.58783 9.78047 4.8ZM8.18047 8C8.18047 7.78783 8.26475 7.58434 8.41478 7.43431C8.56481 7.28429 8.7683 7.2 8.98047 7.2C9.19264 7.2 9.39612 7.28429 9.54615 7.43431C9.69618 7.58434 9.78047 7.78783 9.78047 8V12C9.78047 12.2122 9.69618 12.4157 9.54615 12.5657C9.39612 12.7157 9.19264 12.8 8.98047 12.8C8.7683 12.8 8.56481 12.7157 8.41478 12.5657C8.26475 12.4157 8.18047 12.2122 8.18047 12V8Z"
                                                            fill="#212529" fill-opacity="0.32" />
                                                    </svg>
                                                </span>
                                                -
                                            </span>
                                        </span>
                                    </span>
                                    <span>
                                        <span style="
                               padding: 10px;
                               font-size: 16px;
                               border-bottom: 1px solid #E8604C;
                               font-weight: 500;
                               font-family: 'Poppis',sans-serif;
                               color:#E8604C;
                               ">Triple</span>
                                        <span style="
                               padding: 10px;
                               font-size: 16px;
                               font-weight: 500;
                               font-family: 'Poppis',sans-serif;">Double</span>
                                        <span style="
                               padding: 10px;
                               font-size: 16px;
                               font-weight: 500;
                               font-family: 'Poppis',sans-serif;">Quad</span>
                                    </span>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 p-3 border rounded" style="border-color: #00000059;">
                                    <div>
                                        <span style="font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 500;">
                                            Tempo Traveller -
                                        </span>
                                        <span style="font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 400;">
                                            Triple Occupancy
                                        </span>
                                    </div>
                                    <div>
                                        <span style="font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 500;">
                                            ₹ {{ $destinationDetail->Price }}
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Include the Google Fonts link in the head of your HTML -->
                                <head>
                                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
                                </head>
                                
                            </form>
                        </div>
                    </div>
                </div>
                @php
                // Decode the JSON string to an array
                $imageUrls = json_decode($destinationDetail->gallery);
                @endphp
                <h1>Gallery</h1>
                <div class="row mt-4 container">
                    @foreach($imageUrls as $key => $imageUrl)
                    <div class="col-md-3 mb-3"
                        style="height: {{ $key == 0 ? '440px' : '220px' }}; width: {{ $key == 0 ? '549px' : '220px' }};">
                        <img src="{{ asset('storage/' . $imageUrl) }}" class="img-fluid rounded" alt="Gallery Image"
                            style="height: 100%; width: 100%;">
                    </div>
                    @endforeach
                </div>
                <h1>Deoriatal {{ $destinationDetail->name_package }}</h1>
                <div id="itineraryContent" class="mt-3">
                    <p>{!! $destinationDetail->Itinerary !!}</p>
                </div>
                <p class="card-text">Payment Terms & Policy: {!! $destinationDetail->payment_terms_policy !!}</p>
                <!-- Include other destination details here -->
                <div class="row mt-4 container">
                    <div class="col-md-3 mb-3">
                        @if($destinationDetail->Category)
                        <p class="card-text">Category: {{ $destinationDetail->Category }}</p>
                        @endif
                        @if($destinationDetail->height_of_place)
                        <p class="card-text">Height of Place: {{ $destinationDetail->height_of_place }}</p>
                        @endif
                        @if($destinationDetail->pick_drop)
                        <p class="card-text">Pick & Drop: {{ $destinationDetail->pick_drop }}</p>
                        @endif
                        @if($destinationDetail->Difficulty)
                        <p class="card-text">Difficulty: {{ $destinationDetail->Difficulty }}</p>
                        @endif
                        @if($destinationDetail->Trek_Length)
                        <p class="card-text">Trek Length: {{ $destinationDetail->Trek_Length }}</p>
                        @endif
                        @if($destinationDetail->Inclusions)
                        <p class="card-text">Inclusions: {!! $destinationDetail->Inclusions !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleContent(contentId) {
         var content = document.getElementById(contentId);
         if (content.style.display === "none") {
             content.style.display = "block";
         } else {
             content.style.display = "none";
         }
         // Scroll to the content
         content.scrollIntoView({ behavior: 'smooth', block: 'start' });
       }
    </script>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Departures</h2>
                @if($destinationDetail)
                <?php
                $matchingPackages = \App\DatesPackage::where('Packages_name', $destinationDetail->id)->get();
                ?>
                <div
                    class="table-responsive-sm table-responsive-xl table-responsive-lg table-responsive-md table-responsive">
                    <table class="table" style="background: #C7C7C7;">
                        <thead>
                            <tr>
                                <th>Date From</th>
                                <th>Date To</th>
                                <th>Availability<br><small
                                        style="font-size:12px;font-weight:lighter;line-height:24.5px;">Remaining
                                        Spaces</small>
                                </th>
                                <th>Price Per Person</th>
                                <th>Apply or Request</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $currentMonth = null; // Track the current month
                            $today = new DateTime(); // Get the current date
                            @endphp
                            @foreach($matchingPackages as $package)
                            @php
                            // Convert date_from and date_to strings to DateTime objects
                            $dateFrom = new DateTime($package->date_from);
                            $dateTo = new DateTime($package->date_to);
                            $packageMonth = $dateTo->format('M'); // Get the month of the current package
                            $packagePassed = $dateFrom < $today; // Check if the date from has passed
                                $discountedPrice=null; // Initialize discounted price // Check if an offer is available
                                $offerAvailable=$package->Offer_available;
                                if($offerAvailable) {
                                // Fetch offer details using offer ID
                                $offer = App\Models\Offer::find($offerAvailable);
                                if($offer) {
                                $discountedPrice = $destinationDetail->Price - $offer->amout;
                                }
                                }
                                @endphp
                                @if($currentMonth !== $packageMonth && !$packagePassed)
                                <!-- If the month changes and date from hasn't passed -->
                                @php
                                $currentMonth = $packageMonth; // Update the current month
                                @endphp
                                <tr style="background-color: #f0f0f0;">
                                    <!-- Change row color for the end of month message -->
                                    <td colspan="5" class="month-end"
                                        style="background-color: #C7C7C7; text-align: center;">{{ $currentMonth }}</td>
                                </tr>
                                @endif
                                @if (!$packagePassed)
                                <!-- Only display packages if date from has not passed -->
                                <tr
                                    style="background-color: {{ $currentMonth !== $packageMonth ? '#f0f0f0' : '#ffffff' }}">
                                    <!-- Change row color if month changes -->
                                    <td>{{ $dateFrom->format('Y-m-d') }}</td>
                                    <td>{{ $dateTo->format('Y-m-d') }}</td>
                                    <td>{{ $package->no_person }}</td>
                                    <td>
                                        @if(isset($discountedPrice))
                                        ₹ {{ $discountedPrice }} <del> ₹ {{ $destinationDetail->Price }}</del>
                                        @else
                                        ₹ {{ $destinationDetail->Price }}
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-primary">Request</button>
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
</x-guest-layout>