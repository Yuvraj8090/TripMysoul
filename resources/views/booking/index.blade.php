<x-guest-layout>
    <div class="container">
        <h1>Bookings</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Package Name</th>
                    <th>Destination</th>
                    <th>Offer</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->datesPackage->name_package }}</td>
                    <td>{{ $booking->destinationDetail->destination_name }}</td>
                    <td>{{ $booking->offer->offer_name }}</td>
                    <td>{{ $booking->datesPackage->date }}</td>
                    <td>
                        <a href="{{ route('booking.bookByName', ['name' => $booking->datesPackage->name_package]) }}"
                            class="btn btn-primary">Book Now</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-guest-layout>