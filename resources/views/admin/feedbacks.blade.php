<!DOCTYPE html>
<html>
<head>
    <title>Admin - Feedbacks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2 class="mb-4">Customer Feedbacks</h2>
        <a href="/" class="btn btn-secondary mb-3">Back to Home</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedbacks as $fb)
                <tr>
                    <td>{{ $fb->id }}</td>
                    <td>{{ $fb->name }}</td>
                    <td>{{ $fb->phone }}</td>
                    <td>{{ $fb->email }}</td>
                    <td>{{ $fb->message }}</td>
                    <td>{{ $fb->created_at->format('d M Y') }}</td>
                    <td>
                        <form action="{{ route('admin.feedback.delete', $fb->id) }}" method="POST" onsubmit="return confirm('Delete this?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>