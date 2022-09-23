<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1"
          name="viewport">
    <title>Laravel</title>
    @livewireStyles

</head>

<body class="antialiased">
    @livewire('plantuml')

    @livewireScripts
</body>

</html>
