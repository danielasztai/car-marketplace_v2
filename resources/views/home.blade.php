<x-layout class="overflow-hidden">
    <div class="h-[calc(100vh-17vh)]">
        <div class="flex h-1/2">
            <div class="w-1/2 bg-orange-600 text-center pt-12 text-2xl">
                <h2>Welcome To Our Marketplace</h2>
                <h3 class="mt-6 mb-24">You can find here many cars from people just like you!</h3>
                <a href="/cars"><h3 class="bg-white inline p-4 rounded-lg hover:bg-gray-900 hover:text-white">Take me there! <i class="fa-solid fa-car"></i></h3></a>
            </div>
            <div class="w-1/2 bg-zinc-600 border-l-2 border-gray-900 text-center pt-12 text-2xl">
                <h2>Try out our brand new insurance!</h2>
                <h3 class="mt-6 mb-4">Insurance in the whole EU!</h3>
                <p class="text-lg px-24">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita tempora repellat unde neque ut provident, architecto amet nihil excepturi quam?</p>
            </div>
        </div>
        <div class="flex h-1/2">
            <div class="w-2/3 border-t-2 border-r-2 border-gray-900 bg-zinc-600 text-center pt-12 text-2xl">
                @if(Auth::check())
                    <h2 class="mb-12">You want to manage your cars?</h2>
                    <a href="/cars/manage"><h3 class="p-2 bg-white inline rounded-lg hover:bg-gray-900 hover:text-white">Edit here!</h3></a>
                @else
                    <h2 class="mb-12">You want to sell your car?</h2>
                    <a href="/register"><h3 class="p-2 bg-white inline rounded-lg hover:bg-gray-900 hover:text-white">Register here!</h3></a>
                @endif
            </div>
            <div class="w-1/3 bg-orange-600 border-t-2 border-gray-900 pt-8 pl-12">
                <h2 class="text-2xl font-semibold mb-6 text-gray-900">Do you have a question?</h2>
                <a href="/contact"><h3 class="text-xl p-2 bg-white inline rounded-lg hover:bg-gray-900 hover:text-white">Contact us! <i class="fa-solid fa-envelope"></i></h3></a>
            </div>
        </div>
    </div>
</x-layout>