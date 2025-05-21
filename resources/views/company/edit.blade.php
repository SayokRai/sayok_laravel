<x-layout>
    <div class="container flex justify-between items-center">
        <h1>
        Edit your company
    </h1>
    <a href="/company"><button class="px-4 py-2 bg-orange-500 rounded">Return</button></a>
    </div>
    <img src="{{asset('images/1000000594.jpg')}}" alt="jci">
    <form class="container" action="/update-company/{{$company->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="grid grid-cols-2 gap-3">
            <div>
                <label for="name">Company name</label>
                <input value="{{ $company->name }}" type="text" name="name" id="name" class="w-full rounded">
            </div>

            <div>
                <label for="address">Company address</label>
                <input value="{{ $company->address }}" type="text" name="address" id="address" class="w-full rounded">
            </div>

            <div>
                <label for="email">Company email</label>
                <input value="{{ $company->email }}" type="email" name="email" id="email" class="w-full rounded">
            </div>

            <div>
                <label for="logo">Company logo</label>
                <input type="file" name="logo" id="logo">
                <img class="h-[50px]" src="{{ asset($company->logo) }}" alt="">
            </div>

            <div>
                <button type="submit" class="bg-green-500 px-4 py-2 text-white rounded ">Update</button>
            </div>
        </div>
    </form>
</x-layout>
