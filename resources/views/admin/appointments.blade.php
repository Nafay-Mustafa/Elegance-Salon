<!DOCTYPE html>
<html>
<head>
    <title>Admin - Appointments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2 class="mb-4">All Appointments - Elegance Salon</h2>
        <a href="/index" class="btn btn-secondary mb-3">Back to Home</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Service</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->date }}</td>
                    <td>{{ $row->time }}</td>
                    <td>{{ $row->service }}</td>
<td>
    <form action="{{ route('admin.appointments.delete', $row->id) }}" method="POST" onsubmit="return confirm('Delete karna hai?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>