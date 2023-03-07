<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 p-4">
  <div class="mx-auto rounded-xl bg-white py-8 px-6 lg:w-2/4">
    <h1 class="mb-8 text-center text-5xl font-bold">ToDo Laravel</h1>
    @include('components.form')
    <hr>
    <div class="mt-2">
      @include('components.item')
    </div>
  </div>
</body>

</html>
