<x-layout>
    <section class="container">
        <div class="flex justify-between items-center">
            <h1>Student's Data</h1>
            <a href="/students">
                <button class="px-4 py-2 bg-gray-500 rounded">Go Back</button>
            </a>
        </div>

        <div>
            <form action="/save-students" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-[20px]">
                    <div>
                        <label for="name">Name</label>
                        <input class="w-full" type="text" name="name" id="name">
                    </div>
                    <div>
                        <label for="age">Age</label>
                        <input class="w-full" type="number" name="age" id="age">
                    </div>
                    <div>
                        <label for="grade">Grade</label>
                        <input class="w-full" type="text" name="grade" id="grade">
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <input class="w-full" type="text" name="address" id="address">
                    </div>
                    <div>
                        <label for="photo">Student photo</label>
                        <input class="w-full" type="file" name="photo" id="photo">
                    </div>
                    <div>
                        <button type="submit" class="bg-green-500 px-4 py-2 text-white rounded ">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>
