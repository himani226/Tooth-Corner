<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Book an Appointment</h2>
    <form action="{{ url('/book') }}" method="post">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Phone Number -->
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
            @error('phone_number')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Appointment Date -->
        <div class="form-group">
            <label for="appointment_date">Appointment Date:</label>
            <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
            @error('appointment_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Appointment Time -->
        <div class="form-group">
            <label for="appointment_time">Appointment Time:</label>
            <input type="time" class="form-control" id="appointment_time" name="appointment_time" required>
            @error('appointment_time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Service -->
        <div class="form-group">
            <label for="service">Service:</label>
            <select class="form-control" id="service" name="service" required>
                <option value="General Checkup">General Checkup</option>
                <option value="Dental Cleaning">Dental Cleaning</option>
                <option value="Tooth Extraction">Tooth Extraction</option>
            </select>
            @error('service')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Book Appointment</button>
    </form>
</div>

</body>
</html>
