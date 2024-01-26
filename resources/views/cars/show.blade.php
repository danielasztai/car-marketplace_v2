<x-layout>
    <div class="flex flex-col items-center gap-12">
        <a href="./" class="absolute left-96 top-32 text-xl">🠄Back</a>
        <div class="flex-col bg-gray-200 w-1/2 mt-12 gap-x-6">
            <div class="flex justify-center">
                <img src="{{ asset('storage/' . $car->image) }}" class="max-h-96">
            </div>
            <div>
                <div class="flex gap-12 p-2">
                    <h2>{{$car->name}}</h2>
                    <h2>${{$car->price}}</h2>
                </div>
                <div class="flex gap-6 p-2">
                    <p>{{$car->prod_year}}</p>
                    <p>{{$car->km}}</p>
                    <p>{{$car->power}} kW {{round($car->power * 1.34102209)}}</p>
                    <p>{{$car->type}}</p>
                    <p>{{$car->fuel}}</p>
                    <p>{{$car->gearbox}}</p>
                    <p>{{$car->mot}}</p>
                </div>
                <div class="flex gap-6 items-center p-2">
                    <a href="/favorites"><i class="fa-solid fa-star"></i></a>
                    <a href="/user/contact" class="p-2 bg-orange-600 rounded-lg text-grey-900 hover:text-white hover:bg-gray-900"><h2>Contact</h2></a>
                </div>
            </div>
        </div>
        <div class="w-2/4">
            <p>{{$car->description}}</p>
            <p>{{$car->description}}</p>
            <p>{{$car->description}}</p>
        </div>
    </div>
</x-layout>