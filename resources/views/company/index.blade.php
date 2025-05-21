<x-layout>
    <section>
        <div class="container flex justify-between items-center mb-[50px]">
            <h1>index page</h1>
            <a href="/company/create"> <button class="bg-red-500 rounded px-4 py-2">Create yo company</button> </a>
        </div>

        <div class="mt-[30px]">
            <table class="w-full text-center">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-1 border">Name</th>
                        <th class="py-1 border">SN</th>
                        <th class="py-1 border">Email</th>
                        <th class="py-1 border">Address</th>
                        <th class="py-1 border">Logo</th>
                        <th class="py-1 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $item)
                        <tr>
                            <td class="py-1 border">{{$item->id}}</td>
                            <td class="py-1 border">{{$item->name}}</td>
                            <td class="py-1 border">{{$item->email}}</td>
                            <td class="py-1 border">{{$item->address}}</td>
                            <td class="py-1 border ">
                                <img class="h-[60px]" src="{{asset($item->logo)}}" alt="">
                            </td>
                            <td class="py-1 border">
                                <form action="/delete-company/{{$item->id}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <a href="/edit-company/{{$item->id}}">Edit</a>
                                    <button type="submit" class="bg-red-500 rounded text-white px-4 py-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
