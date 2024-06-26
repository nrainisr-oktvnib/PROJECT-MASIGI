<?= $this->extend('auth/Takmir/layout2'); ?>

<?= $this->section('content'); ?>
<div id="calendar"></div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Islam</title>
    <link rel="stylesheet" href="dashboard2.css">
</head>

<body>
    <div class="calendar-container">
        <div class="calendar-header">
            <button onclick="prevMonth()">&#8249;</button>
            <div class="month-display" id="monthDisplay"></div>
            <button onclick="nextMonth()">&#8250;</button>
        </div>
        <div class="calendar-body">
            <div class="weekdays">
                <div>Ahad</div>
                <div>Senin</div>
                <div>Selasa</div>
                <div>Rabu</div>
                <div>Kamis</div>
                <div>Jumat</div>
                <div>Sabtu</div>
            </div>
            <div class="days" id="days"></div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>

<?= $this->endSection(); ?>