<div
    class="overflow-x-auto table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
    <table class="min-w-full bg-gray-200 rounded-lg table">
        <tbody>
            @php
            $months = [];
            @endphp
            @foreach($packages as $package)
            <?php
            $dateFrom = new DateTime($package->date_from);
            $dateTo = new DateTime($package->date_to);
            $packageMonth = $dateFrom->format('F');
            $months[$packageMonth][] = ['from' => $dateFrom, 'to' => $dateTo, 'package' => $package];
            ?>
            @endforeach
            @php
            ksort($months); // Sort months in ascending order
            @endphp
            @foreach($months as $month => $packagesByMonth)
            <tr class="bg-gray-300 border-b border-gray-500">
                <td colspan="2" class="py-2 px-4 font-bold">{{ $month }}</td>
            </tr>
            @php
            usort($packagesByMonth, function($a, $b) {
            return $a['from'] <=> $b['from']; // Sort packages by start date
                });
                @endphp
                @foreach($packagesByMonth as $packageInfo)
                <?php
            $package = $packageInfo['package'];
            $dateFrom = $packageInfo['from'];
            $dateTo = $packageInfo['to'];
            $discountedPrice = null;
            $offerAvailable = $package->Offer_available;
            if ($offerAvailable) {
                $offer = \App\Models\Offer::find($offerAvailable);
                if ($offer && is_numeric($destinationDetail->Price) && is_numeric($offer->amout)) {
                    $discountedPrice = $destinationDetail->Price - $offer->amout;
                }
            }
            ?>
                <tr class="bg-white border-b border-gray-300">
                    <td class="py-2 px-4">{{ $dateFrom->format('d-M') }} To {{ $dateTo->format('d-M') }}</td>
                    <td class="py-2 px-4">
                        @if(isset($discountedPrice) && is_numeric($discountedPrice))
                        ₹ {{ $discountedPrice }}
                        @else
                        ₹ {{ $destinationDetail->Price }}
                        @endif
                    </td>
                </tr>
                @endforeach
                @endforeach
        </tbody>
    </table>
</div>