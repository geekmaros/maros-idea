<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title>Idea</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>
<body class="bg-background text-foreground">

    <main class="max-w-7xl mx-auto px-6">
        {{ $slot }}
    </main>

     <div x-data="{greeting: 'Hi'}">
         <p x-text="greeting"></p>

         <input type="text" x-model="greeting">

     </div>

@session('success')
    <div
        x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        x-transition.opacity.duration.300ms
        class="bg-primary transition-all ease-in-out px-4 py-3 absolute bottom-4 right-4 rounded-lg">{{ $value }}</div>
@endsession
</body>
</html>
