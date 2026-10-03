<!DOCTYPE html>
<html>
<head>
    <title>Admin - Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2 class="mb-4">Contact Queries</h2>
    <a href="/" class="btn btn-secondary mb-3">Back to Home</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr><th>#</th><th>Name</th><th>Phone</th><th>Email</th><th>Message</th><th>Action</th></tr>
        </thead>
        <tbody>
            @foreach($contacts as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->message }}</td>
                <td>
                    <form action="{{ route('admin.contacts.delete', $row->id) }}" method="POST">
                        @csrf @method('DELETE')
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