@extends('layouts.sbadmin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">T&CM Practitioner Registration</h1>

    <form action="#" method="POST">
        @csrf
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" placeholder="Enter full name">
        </div>
        <div class="form-group">
            <label>IC / Passport No.</label>
            <input type="text" class="form-control" placeholder="IC or passport">
        </div>
        <div class="form-group">
            <label>Practice Type</label>
            <select class="form-control">
                <option>Traditional Malay Medicine</option>
                <option>Traditional Chinese Medicine</option>
                <option>Ayurveda</option>
                <!-- Add more -->
            </select>
        </div>
        <div class="form-group">
            <label>Phone / Email</label>
            <input type="text" class="form-control" placeholder="Contact info">
        </div>

        <button type="submit" class="btn btn-primary">Submit Application</button>
    </form>
</div>
@endsection
