<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>
    </head>
    <body>
        @foreach ($data as $d)
        <div>
            {{ $d->value }}
        </div>
        @endforeach
    </body>
</html>
