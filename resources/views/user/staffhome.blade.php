@extends('user.staffportal')

@section('content')
<div class="container" style="padding-top:30px; padding-bottom:60px;">

    <h2 class="heading_container heading_center mb-4">All Bookings - Elegance Salon</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead style="background:#970909; color:#fff;">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                     <th>Additional Details</th>
                    <th>Service</th>
                
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->date }}</td>
                        <td>{{ $row->time }}</td>
                        <td>{{ $row->service }}</td>
                        <td>{{ $row->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No bookings yet</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection