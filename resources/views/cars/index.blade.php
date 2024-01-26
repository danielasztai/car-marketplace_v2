<x-layout class="mt-16">
    <form action="" method="" class="flex justify-center gap-x-4 mt-6">
        @csrf
        <div class="flex flex-col">
            <label for="brand">Brand:</label>
            <select name="brand" id="brand" class="bg-gray-400">
                <option value=""></option>
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="BMW">BMW</option>
                <option value="Ford">Ford</option>
                <option value="Mercedes">Mercedes Benz</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
            </select>

            <div>
                <label for="price-from">Price:</label><br>
                <input type="number" name="price-from" class="bg-gray-400 pl-2 placeholder-gray-700" value="{{old('price')}}" placeholder="from">
                <input type="number" name="price-upto" class="bg-gray-400 pl-2 placeholder-gray-700" value="{{old('price')}}" placeholder="up to">
            </div>

            <div>
                <label for="prod_year-from">Production year:</label><br>
                <input type="number" name="prod_year-from" class="bg-gray-400 pl-2 placeholder-gray-700" value="{{old('prod_year')}}" placeholder="from">
                <input type="number" name="prod_year-upto" class="bg-gray-400 pl-2 placeholder-gray-700" value="{{old('prod_year')}}" placeholder="up to">
            </div>

            <div>
                <label for="km-from">Kilometres:</label><br>
                <input type="number" name="km-from" class="bg-gray-400 pl-2 placeholder-gray-700" value="{{old('km')}}" placeholder="from">
                <input type="number" name="km-upto" class="bg-gray-400 pl-2 placeholder-gray-700" value="{{old('km')}}" placeholder="up to">
            </div>

            <div>
                <label for="power-from">Power of the car (kW): </label><br>
                <input type="number" name="power-from" class="bg-gray-400 pl-2 placeholder-gray-700" value="{{old('power')}}" placeholder="from">
                <input type="number" name="power-upto" class="bg-gray-400 pl-2 placeholder-gray-700" value="{{old('power')}}" placeholder="up to">
            </div>

        </div>
        <div class="flex flex-col">
                <label for="type">Type</label>
                <select name="type" id="type" class="bg-gray-400">
                    <option value=""></option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Limousine">Limousine</option>
                    <option value="Suv">SUV</option>
                    <option value="Cabrio">cabrio</option>
                    <option value="Coupe">Coupe</option>
                    <option value="Wagon">Wagon</option>
                </select>

                <label for="fuel">Fuel</label>
                <select name="fuel" id="fuel" class="bg-gray-400">
                    <option value=""></option>
                    <option value="Benzin">Benzin</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Electric">Electric</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Lpg">LPG</option>
                </select>

                <label for="gearbox">Gearbox</label>
                <select name="gearbox" id="gearbox" class="bg-gray-400">
                    <option value=""></option>
                    <option value="Automatic">Automatic</option>
                    <option value="Manual">Manual</option>
                </select>

                <button class="bg-orange-600 rounded-lg p-2 mt-4 hover:bg-gray-900 hover:text-white">
                    Confirm Selection
                </button>
        </div>
    </form>
    @foreach($cars as $car)
    <a href="/cars/{{$car->id}}">
        <div class="flex justify-center h-2/4">
            <div class="bg-gray-200 w-2/6 mt-12 gap-x-6">
                <div>
                    <img src="{{ asset('storage/' . $car->image) }}" class="w-full max-h-60 object-contain">
                </div>
                <div>
                    <div class="flex gap-12 p-2">
                        <h2>{{$car->name}}</h2>
                        <h2>${{$car->price}}</h2>
                    </div>
                    <div class="flex gap-6 p-2">
                        <p>{{$car->prod_year}}</p>
                        <p>{{$car->km}} km</p>
                        <p>{{$car->power}}kW {{round($car->power * 1.34102209)}}hp</p>
                        <p>{{$car->type}}</p>
                        <p>{{$car->fuel}}</p>
                        <p>{{$car->gearbox}}</p>
                        <p>MOT: {{$car->mot}}</p>
                    </div>
                    <div class="flex gap-6 items-center p-2">
                        <a href="/favorites"><i class="fa-solid fa-star"></i></a>
                        <a href="/chat" class="p-2 bg-orange-600 rounded-lg text-grey-900 hover:text-white hover:bg-gray-900"><h2>Contact</h2></a>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach

    <div class="flex justify-center mt-6">
        {{ $cars->links() }}
    </div>

</x-layout>