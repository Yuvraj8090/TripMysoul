<div class="container">
    <h1>Book Now - {{ $destinationDetail->name_package }}</h1>
    <p><strong>Price:</strong> ₹{{ $destinationDetail->Price }}</p>
    <p><strong>Overview:</strong> {{ $destinationDetail->overview }}</p>
    <p><strong>No of Days:</strong> {{ $destinationDetail->no_of_days }}</p>

    @if($datesPackages->count() > 0)
    <h2>Available Dates</h2>
    <table class="table">
        <thead>
            <tr>
                <th>From</th>
                <th>To</th>
                <th>No of Persons</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datesPackages as $package)
            <tr>
                <td>{{ \Carbon\Carbon::parse($package->date_from)->format('d-M-Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($package->date_to)->format('d-M-Y') }}</td>
                <td>{{ $package->no_person }}</td>
                <td>₹{{ $destinationDetail->Price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No dates available for this package.</p>
    @endif

    <a href="{{ route('booking.index') }}" class="btn btn-primary">Back to Bookings</a>
</div>