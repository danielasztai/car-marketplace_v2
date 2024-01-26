<x-layout>
    <div class="flex justify-center mt-6">
        <form action="/cars/update/{{$car->id}}" method="POST" class="flex flex-col items-around gap-y-4" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name the car you want to sell:</label><br>
                <input type="text" name="name" class="bg-gray-400 pl-2" value="{{$car->name}}">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="brand">Brand:</label>
                <select name="brand" id="brand" class="bg-gray-400">
                    <option value="">Select Brand</option>
                    <option value="alfa romeo">Alfa Romeo</option>
                    <option value="bmw">BMW</option>
                    <option value="ford">Ford</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="toyota">Toyota</option>
                    <option value="volkswagen">Volkswagen</option>
                    <option value="volvo">Volvo</option>
                </select>

                @error('brand')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="price">Price:</label><br>
                <input type="number" name="price" class="bg-gray-400 pl-2" value="{{$car->price}}">

                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="prod_year">Production year:</label><br>
                <input type="number" name="prod_year" class="bg-gray-400 pl-2" value="{{$car->prod_year}}">

                @error('prod_year')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="km">Kilometres:</label><br>
                <input type="number" name="km" class="bg-gray-400 pl-2" value="{{$car->km}}">

                @error('km')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="power">Power of the car (kW): </label><br>
                <input type="number" name="power" class="bg-gray-400 pl-2" value="{{$car->power}}">

                @error('power')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="type">Type:</label>
                <select name="type" id="type" class="bg-gray-400">
                    <option value="">Select Car Type</option>
                    <option value="hatchback">Hatchback</option>
                    <option value="Limousine">Limousine</option>
                    <option value="suv">SUV</option>
                    <option value="cabrio">cabrio</option>
                    <option value="coupe">Coupe</option>
                    <option value="wagon">Wagon</option>
                </select>

                @error('type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="fuel">Fuel:</label>
                <select name="fuel" id="fuel" class="bg-gray-400">
                    <option value="">Select Fuel Type</option>
                    <option value="benzin">Benzin</option>
                    <option value="diesel">Diesel</option>
                    <option value="electric">Electric</option>
                    <option value="hybrid">Hybrid</option>
                    <option value="lpg">LPG</option>
                </select>

                @error('fuel')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="gearbox">Gearbox:</label>
                <select name="gearbox" id="gearbox" class="bg-gray-400">
                    <option value="">Select Gearbox</option>
                    <option value="automatic">Automatic</option>
                    <option value="manual">Manual</option>
                </select>

                @error('gearbox')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="mot">MOT: </label><br>
                <input type="text" name="mot" class="bg-gray-400 pl-2" value="{{$car->mot}}">

                @error('mot')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="image">Image: </label><br>
                <input type="file" name="image" class="bg-gray-400 pl-2">

                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="description">Description: </label>
                <textarea type="text" name="description" class="bg-gray-400 pl-2" rows="4" cols="22">{{$car->description}}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

                <input type="submit" value="Update Car" class="bg-orange-600 p-2 text-white rounded-lg mt-2 cursor-pointer hover:bg-gray-900 hover:text-orange-600 font-bold mb-6">
            </div>
        </form>
    </div>
</x-layout>