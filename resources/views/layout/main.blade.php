<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 p-4">
  <div class="lg:w-2/4 mx-auto py-8 px-6 bg-white rounded-xl">
    <h1 class="font-bold text-5xl text-center mb-8">ToDo Laravel</h1>
    @include('form')
    <hr>
    <div class="mt-2">
      @include('item')
    </div>
  </div>
</body>

</html>
