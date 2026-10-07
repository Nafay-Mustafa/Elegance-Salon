@extends('user.staffportal')

@section('content')
<div class="container" style="max-width:600px; padding-top:40px; padding-bottom:60px;">

    <form action="{{ url('/updateemployee/' . $employee->id) }}" method="post">
        @csrf
        <h2 class="heading_container heading_center">Update Account</h2>
        <br>

        <input type="text" name="name" class="form-control"
               value="{{ old('name', $employee->name) }}" placeholder="Name" required>
        <br>

        <input type="email" name="email" class="form-control"
               value="{{ old('email', $employee->email) }}" placeholder="Email" required>
        <br>

        <input type="password" name="password" class="form-control"
               placeholder="New password (leave blank to keep current)">
        <br>

        <input type="number" name="number" class="form-control"
               value="{{ old('number', $employee->number) }}" placeholder="Phone number" required>
        <br>

        <button type="submit" class="btn-grad">Update</button>
    </form>

</div>
@endsection