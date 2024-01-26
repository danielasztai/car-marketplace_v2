<x-layout>
    <form action="/contact" method="POST" class="mt-12">
        @csrf
        <div class="flex items-center flex-col">
            <h2 class="mb-4 text-2xl">Send us a message!</h2>
            <div>
                <label for="name">Name</label><br>
                <input type="text" name="name" class="bg-gray-400 rounded-md pl-2">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="email">Email</label><br>
                <input type="email" name="email" class="bg-gray-400 rounded-md pl-2">

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="message">Message</label><br>
                <textarea type="message" name="message" class="bg-gray-400 rounded-md pl-2" rows="6" cols="60"></textarea>

                @error('message')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <input type="submit" value="Send Message" class="bg-orange-600 p-2 text-white rounded-lg mt-2 cursor-pointer hover:bg-gray-900 hover:text-orange-600 font-bold mb-6">
        </div>
    </form>
</x-layout>