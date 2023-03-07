<div class="mb-6">
  <form class="flex flex-col space-y-4" method="post" action="/">
    @csrf
    <input type="text" name="title" placeholder="Todo title" class="rounded-xl bg-gray-100 py-3 px-4">
    <textarea name="description" placeholder="Todo description" class="rounded-xl bg-gray-100 py-3 px-4"></textarea>
    <button class="w-28 rounded-xl bg-green-500 py-3 px-8 text-white">Add</button>
  </form>
</div>
