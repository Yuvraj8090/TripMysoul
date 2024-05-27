<x-guest-layout>
    <div class="container mx-auto my-5 mt-5 pt-5">
        <div class="flex flex-col lg:flex-row justify-center gap-5 mt-5 pt-5">
            <div class="bg-white p-6 rounded-lg w-full lg:w-1/2 shadow-lg">
                @if($destinationDetail)
                <?php
                $matchingPackages = \App\DatesPackage::where('Packages_name', $destinationDetail->id)->get();
                $noPackages = true;
                ?>


                <h4 class="text-xl font-semibold mb-4">Date Of Packages</h4>
                <form id="uniquePackageForm">
                    <div class="bg-light p-4 rounded-lg">
                        <div class="form-group">
                            @php
                            $today = new DateTime();
                            @endphp
                            <table class="table-auto w-full border-collapse">
                                <tbody id="packageTableBody">
                                    @foreach($matchingPackages as $package)
                                    @php
                                    $dateFrom = new DateTime($package->date_from);
                                    $dateTo = new DateTime($package->date_to);
                                    $packagePassed = $dateFrom < $today; $discountedPrice=null;
                                        $offerAvailable=$package->Offer_available;
                                        if ($offerAvailable) {
                                        $offer = \App\Models\Offer::find($offerAvailable);
                                        if ($offer && is_numeric($destinationDetail->Price) &&
                                        is_numeric($offer->amout)) {
                                        $discountedPrice = $destinationDetail->Price - $offer->amout;
                                        }
                                        }
                                        @endphp
                                        @if (!$packagePassed)
                                        <?php $noPackages = false; ?>
                                        <tr class="uniqueRadioPackage">
                                            <td class="px-4 py-2">
                                                <input type="radio" id="package{{ $package->id }}" name="date_package"
                                                    class="custom-control-input" value="{{ $package->id }}"
                                                    data-start="{{ $dateFrom->format('Y-m-d') }}"
                                                    data-end="{{ $dateTo->format('Y-m-d') }}"
                                                    data-price="{{ isset($discountedPrice) ? $discountedPrice : $destinationDetail->Price }}"
                                                    data-offer-available="{{ $offerAvailable ? 'true' : 'false' }}"
                                                    data-offer-amount="{{ $offerAvailable ? $offer->amout : 0 }}">
                                            </td>
                                            <td class="px-4 py-2">
                                                <label class="custom-control-label" for="package{{ $package->id }}">
                                                    {{ $dateFrom->format('d-M') }} to {{ $dateTo->format('d-M') }}
                                                </label>
                                            </td>
                                            <td class="px-4 py-2">
                                                ₹ {{ isset($discountedPrice) ? $discountedPrice :
                                                $destinationDetail->Price }}
                                            </td>
                                            <td class="px-4 py-2">
                                                @if ($offerAvailable)
                                                <span class="text-success">You save ₹ {{ $offer->amout }}</span>
                                                @else
                                                N/A
                                                @endif
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                </tbody>
                            </table>
                            @if ($noPackages)
                            <!-- If there are no available packages, display a date input -->
                            <div class="form-group mt-4">
                                <label for="uniqueDatepicker" class="block font-semibold mb-2">Select Date:</label>
                                <input type="date" id="uniqueDatepicker" name="selected_date"
                                    class="block border border-gray-300 rounded px-3 py-2 mt-2" style="
                                    padding: 20px;
                                    border-radius: 26px;
                                ">
                                <p class="mt-2"><strong>End Date:</strong> <span id="uniqueEndDate"
                                        class=" border border-gray-300 rounded px-3 py-2 mt-2 " style="
                                    padding: 20px;width: fit-content;
                                    border-radius: 26px;
                                "></span></p>
                                <input type="hidden" id="hiddenPackageId" name="package_id" value="new">
                                <input type="hidden" id="hiddenPrice" name="price"
                                    value="{{ $destinationDetail->Price }}">
                            </div>
                            @endif
                        </div>
                    </div>
                </form>
                @else
                <p class="text-danger">No matching data found.</p>
                @endif
                <script>
                    document.getElementById('uniqueDatepicker').addEventListener('change', function() {
                        var startDate = new Date(this.value);
                        var noOfDays = {{ $destinationDetail->no_of_days }};
                        startDate.setDate(startDate.getDate() + noOfDays);

                        var endDate = startDate.toISOString().split('T')[0];
                        document.getElementById('uniqueEndDate').innerText = endDate;

                        // Create or update the row for the selected date
                        var price = document.getElementById('hiddenPrice').value;
                        var packageTableBody = document.getElementById('packageTableBody');

                        var existingRow = document.querySelector('tr[data-package-id="new"]');
                        if (!existingRow) {
                            var newRow = document.createElement('tr');
                            newRow.setAttribute('data-package-id', 'new');
                            newRow.classList.add('uniqueRadioPackage');
                            newRow.innerHTML = `
                                <td class="px-4 py-2">
                                    <input type="radio" id="packageNew" name="date_package"
                                        class="custom-control-input" value="new"
                                        data-start="${this.value}"
                                        data-end="${endDate}"
                                        data-price="${price}"
                                        checked>
                                </td>
                                <td class="px-4 py-2">
                                    <label class="custom-control-label" for="packageNew">
                                        ${this.value} to ${endDate}
                                    </label>
                                </td>
                                <td class="px-4 py-2">
                                    ₹ ${price}
                                </td>
                                <td class="px-4 py-2">
                                    N/A
                                </td>`;
                            packageTableBody.appendChild(newRow);
                        } else {
                            existingRow.querySelector('input').setAttribute('data-start', this.value);
                            existingRow.querySelector('input').setAttribute('data-end', endDate);
                            existingRow.querySelector('input').setAttribute('data-price', price);
                            existingRow.querySelector('label').innerText = `${this.value} to ${endDate}`;
                            existingRow.querySelector('td:nth-child(3)').innerText = `₹ ${price}`;
                        }
                    });
                </script>

            </div>
            <div class="bg-white p-6 rounded-lg w-full lg:w-1/2 shadow-lg">
                <x-booking-form />
            </div>
        </div>

    </div>
    <div class="container mx-auto my-5 mt-5 pt-5">
        <div class="flex flex-col lg:flex-row justify-center gap-5 mt-5 pt-5">
            <div class="bg-white p-6 rounded-lg w-full lg:w-1/2 shadow-lg">
                <h3>Occupancy</h3>
                <table>
                    <tr>
                        <th>Price</th>
                        <th>No. Of Members</th>
                    </tr>
                    <tr>{{ $destinationDetail->Price }}</tr>
                    <tr>

                        <input type="number" name="cust_memb" id="cust_memb" wire:model="cust_memb"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                    </tr>
                </table>

            </div>
            <div class="bg-white p-6 rounded-lg w-full lg:w-1/2 shadow-lg">

            </div>
        </div>
    </div>


</x-guest-layout>

@if (auth()->check())
<script>
    window.addEventListener('DOMContentLoaded', function() {
            // Get the destination package name
            var packageName = "{{ $destinationDetail->name_package }}";
            var custName = "{{ auth()->user()->name }}";
            var custNub = "{{ auth()->user()->phone_number }}";
            var custEmail = "{{ auth()->user()->email }}";
            
            // Set the value of the input fields
            document.getElementById('package_name').value = packageName;
            document.getElementById('cust_name').value = custName;
            document.getElementById('cust_num').value = custNub;
            document.getElementById('cust_email').value = custEmail;

            // Function to update total amount
            function updateTotalAmount() {
                var numPersons = parseInt(document.getElementById('cust_memb').value, 10);
                var price = parseFloat("{{ str_replace(',', '', $destinationDetail->Price) }}"); // Convert Price to float without commas
                
                var totalPrice = numPersons * price;
                document.getElementById('total_amount').value = totalPrice.toFixed(2);
            }

            // Call updateTotalAmount function when cust_memb input changes
            document.getElementById('cust_memb').addEventListener('change', updateTotalAmount);

            // Trigger updateTotalAmount on page load
            updateTotalAmount();

            // Function to update price
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
            
            // Call updatePrice function when date_package input changes
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
            
            // Trigger updatePrice on page load
            window.addEventListener('load', function() {
                var firstRadioButton = document.querySelector('input[name="date_package"]');
                if (firstRadioButton) {
                    firstRadioButton.checked = true;
                    firstRadioButton.dispatchEvent(new Event('change'));
                }
            });
        });
</script>
@else
<script>
    window.location.href = "{{ route('login') }}";
</script>
@endif