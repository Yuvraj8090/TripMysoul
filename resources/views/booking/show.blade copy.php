<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking for {{ $destinationDetail->name_package }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<body class="bg-light">
    <div class="container my-5">
        <div class="col-12">
            <?php
                    $priceWithoutCommas = str_replace(',', '', $destinationDetail->Price);
                    $price = floatval($priceWithoutCommas);
                    $formattedPrice = number_format($price, 1, '.', '');
            ?>
            <h1 class="text-center text-3xl font-bold mb-5">Booking for {{ $destinationDetail->name_package }}</h1>
            <div class="bg-white p-5 col-6 rounded-lg shadow-sm">
                <h2 class="text-2xl font-semibold mb-4">Destination Details</h2>
                <!-- Display destination details here -->
                <p><strong>Package Name:</strong> {{ $destinationDetail->name_package }}</p>
                <p><strong>Price:</strong> ₹ {{ $formattedPrice }}</p>
                <!-- Add more destination details as needed -->
                <h2 class="text-2xl font-semibold mb-4">Available Packages</h2>
                @if($destinationDetail)
                <?php
                        $matchingPackages = \App\DatesPackage::where('Packages_name', $destinationDetail->id)->get();
                ?>
                <form id="packageForm">
                    <div class="bg-light p-4 rounded-lg">
                        <div class="form-group">
                            @php
                            $today = new DateTime();
                            @endphp
                            @foreach($matchingPackages as $package)
                            @php
                            $dateFrom = new DateTime($package->date_from);
                            $dateTo = new DateTime($package->date_to);
                            $packagePassed = $dateFrom < $today; $discountedPrice=null; $offerAvailable=$package->
                                Offer_available;
                                if ($offerAvailable) {
                                $offer = \App\Models\Offer::find($offerAvailable);
                                if ($offer && is_numeric($destinationDetail->Price) && is_numeric($offer->amout)) {
                                $discountedPrice = $destinationDetail->Price - $offer->amout;
                                }
                                }
                                @endphp
                                @if (!$packagePassed)
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="package{{ $package->id }}" name="date_package"
                                        class="custom-control-input" value="{{ $package->id }}"
                                        data-start="{{ $dateFrom->format('Y-m-d') }}"
                                        data-end="{{ $dateTo->format('Y-m-d') }}"
                                        data-price="{{ isset($discountedPrice) ? $discountedPrice : $destinationDetail->Price }}"
                                        data-offer-available="{{ $offerAvailable ? 'true' : 'false' }}"
                                        data-offer-amout="{{ $offerAvailable ? $offer->amout : 0 }}">
                                    <label class="custom-control-label" for="package{{ $package->id }}">
                                        {{ $dateFrom->format('d-M') }} to {{ $dateTo->format('d-M') }} -
                                        ₹ {{ isset($discountedPrice) ? $discountedPrice : $destinationDetail->Price }}
                                        @if ($offerAvailable)
                                        <del>₹ {{ $destinationDetail->Price }}</del>
                                        <span class="text-success">You save ₹ {{ $offer->amout }}</span>
                                        @endif
                                    </label>
                                </div>
                                @endif
                                @endforeach
                        </div>
                    </div>
                </form>
                @else
                <p class="text-danger">No matching data found.</p>
                @endif
            </div>
            <div class="bg-white col-6 p-5 mt-5 rounded-lg shadow-sm">
                <h2 class="text-2xl font-semibold mb-4">Book Now</h2>
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf
                    @auth
                    <div class="form-group">
                        <label for="cust_name">Name:</label>
                        <input type="text" id="cust_name" name="cust_name" class="form-control"
                            value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="cust_email">Email:</label>
                        <input type="email" id="cust_email" name="cust_email" class="form-control"
                            value="{{ auth()->user()->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="cust_email">Phone number</label>
                        <input type="email" id="cust_email" name="cust_email" class="form-control"
                            value="{{ auth()->user()->phone_number }}" readonly>
                    </div>
                    @else
                    <div class="form-group">
                        <label for="cust_name">Name:</label>
                        <input type="text" id="cust_name" name="cust_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cust_email">Email:</label>
                        <input type="email" id="cust_email" name="cust_email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cust_num">Phone Number:</label>
                        <input type="text" id="cust_num" name="cust_num" class="form-control" required>
                    </div>
                    @endauth
                    <input type="hidden" id="package_id" name="package_id">
                    <input type="hidden" id="trip_start" name="trip_start">
                    <input type="hidden" id="trip_end" name="trip_end">
                    <input type="hidden" id="days" name="days">
                    <div class="form-group">
                        <label for="num_persons">Number of Persons:</label>
                        <input type="number" id="num_persons" name="num_persons" class="form-control" min="1" value="1"
                            onchange="updatePrice()" required>
                    </div>
                    <div class="form-group">
                        <label for="price_per_person">Price per Person:</label>
                        <input type="text" id="price_per_person" name="price_per_person" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="total_amount">Total Amount:</label>
                        <input type="text" id="total_amount" name="total_amount" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="payment_amount">20% Payment Amount:</label>
                        <input type="text" id="payment_amount" name="payment_amount" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="trxid">Transaction ID:</label>
                        <input type="text" id="trxid" name="trxid" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="Pending">Pending</option>
                            <option value="Confirmed">Confirmed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2">Book Now</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function updatePrice() {
                var pricePerPerson = parseFloat(document.getElementById('price_per_person').value.replace('₹', '').replace(/,/g, ''));
                var numPersons = parseInt(document.getElementById('num_persons').value, 10);
                var totalPrice = pricePerPerson * numPersons;
                var paymentAmount = totalPrice * 0.20;
            
                var formattedTotal = totalPrice.toLocaleString('en-IN', { style: 'currency', currency: 'INR' });
                var formattedPayment = paymentAmount.toLocaleString('en-IN', { style: 'currency', currency: 'INR' });
            
                document.getElementById('total_amount').value = formattedTotal;
                document.getElementById('payment_amount').value = formattedPayment;
            }
            
            document.querySelectorAll('input[name="date_package"]').forEach(function (radio) {
                radio.addEventListener('change', function () {
                    document.getElementById('trip_start').value = this.getAttribute('data-start');
                    document.getElementById('trip_end').value = this.getAttribute('data-end');
                    document.getElementById('package_id').value = this.value;
            
                    var price = parseFloat(this.getAttribute('data-price').replace(/,/g, ''));
            
                    var offerAvailable = this.getAttribute('data-offer-available');
                    if (offerAvailable === 'true') {
                        var offerAmount = parseFloat(this.getAttribute('data-offer-amout').replace(/,/g, ''));
                        price -= offerAmount;
                    }
            
                    var start = new Date(this.getAttribute('data-start'));
                    var end = new Date(this.getAttribute('data-end'));
                    var days = Math.floor((end - start) / (1000 * 60 * 60 * 24));
                    document.getElementById('days').value = days;
            
                    document.getElementById('price_per_person').value = '₹' + price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            
                    updatePrice();
                });
            });
            
            window.addEventListener('load', function() {
                var firstRadioButton = document.querySelector('input[name="date_package"]');
                if (firstRadioButton) {
                    firstRadioButton.checked = true;
                    firstRadioButton.dispatchEvent(new Event('change'));
                }
            });
    </script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>