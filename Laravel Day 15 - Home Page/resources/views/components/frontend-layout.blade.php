<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css"
        integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/main.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/sudam-shrestha/nepali-calender@main/src/nepali-calendar.js"></script>

</head>

<body>

    <x-frontend-header />

    <main class="min-h-120">
        {{ $slot }}
    </main>

    <x-frontend-footer />

    <script>
        const date = document.getElementById('date');
        const nep = NepaliCalendar.adToBs(new Date());
        const nep_date = NepaliCalendar.formatBs(nep, 'ne');
        date.innerHTML = nep_date;
    </script>

</body>

</html>
