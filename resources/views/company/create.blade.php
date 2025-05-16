<x-layout>
    <div class="container flex justify-between items-center">
        <h1>
        Create your company
    </h1>
    <a href="/company"><button class="px-4 py-2 bg-orange-500 rounded">Return</button></a>
    </div>
    <form class="container" action="/save-company">
        @csrf
        <div class="grid grid-cols-2 gap-3">
            <div>
                <label for="name">Company name</label>
                <input type="text" name="name" id="name" class="w-full rounded">
            </div>

            <div>
                <label for="address">Company address</label>
                <input type="text" name="address" id="address" class="w-full rounded">
            </div>

            <div>
                <label for="email">Company email</label>
                <input type="email" name="email" id="email" class="w-full rounded">
            </div>

            <div>
                <label for="logo">Company logo</label>
                <input type="file" name="logo" id="logo">
            </div>

            <div>
                <button type="submit" class="bg-green-500 px-4 py-2 text-white rounded ">Submit</button>
            </div>
        </div>
    </form>
</x-layout>
