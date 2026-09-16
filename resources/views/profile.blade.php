<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tugas 2 PWL - Profile</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="profile-card">
        <div class="profile-image">
            <img src="https://ui-avatars.com/api/?name={{ $nama }}&background=E6E6FA&color=4B0082" alt="Profile">
        </div>
        <div class="info-badge">{{ $nama }}</div>
        <div class="info-badge">Kelas {{ $kelas }}</div>
        <div class="info-badge">{{ $npm }}</div>
    </div>
</body>
</html>