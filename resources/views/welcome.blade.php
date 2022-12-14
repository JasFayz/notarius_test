<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    @vite('resources/js/app.js')
</head>
<body>
<div id="app">

    @include('sweetalert::alert')
    <div>


        <create-notarius-queue
            :errors="{{ $errors }}"
            csrf_token="{{ csrf_token() }}"
            url="{{ route('notarius.create') }}"
            :init-form="{{ json_encode(old()) }}"
            :service-type="{{ json_encode(\App\Support\Enum\ServiceTypeEnum::all()) }}"></create-notarius-queue>

        <notarius-queue-list
            :list="{{ json_encode($notariusQueue) }}"
            :service-type="{{ json_encode(\App\Support\Enum\ServiceTypeEnum::all()) }}"
        />
    </div>
</div>
</body>
</html>
