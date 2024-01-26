<x-layout>
    <div class="max-h-96 overflow-y-scroll max-w-1/2 px-48 scroll-mr-8">
        <table class="w-full mx-auto text-left">
            <tr class="bg-orange-600 text-white w-full border-b-2">
                <th class="px-4 rounded-l-lg">Car</th>
                <th>Price</th>
                <th>Production year</th>
                <th>Fuel</th>
                <th>Gearbox</th>
                <th>Created at</th>
                <th></th>
                <th class="rounded-r-lg"></th>
            </tr>

            @foreach($cars as $car)
            <tr class="bg-gray-900 text-white border-b-2">
                <td class="py-4 px-4 rounded-l-lg">{{$car->name}}</td>
                <td class="py-4">{{$car->price}}</td>
                <td class="py-4">{{$car->prod_year}}</td>
                <td class="py-4">{{$car->fuel}}</td>
                <td class="py-4">{{$car->gearbox}}</td>
                <td class="py-4">{{$car->created_at}}</td>
                <td class="py-4"><a href="/cars/edit/{{$car->id}}" class="bg-amber-600 py-2 px-4 rounded-lg hover:bg-gray-900 hover:text-white">Edit</a></td>
                <td class="py-4 px-4 rounded-r-lg"><form action="/cars/delete/{{$car->id}}" method="POST">
                    @csrf
                    <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-700 text-white p-2 rounded-lg hover:bg-gray-900">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="max-h-96 overflow-y-scroll max-w-1/2 px-48 scroll-mr-8">
        <table class="w-full mx-auto text-left">
            <tr class="bg-orange-600 text-white w-full border-b-2">
                <th class="px-4 rounded-l-lg">ID</th>
                <th class="px-4">User</th>
                <th>Admin</th>
                <th>Email</th>
                <th>Registered at</th>
                <th></th>
                <th></th>
                <th class="rounded-r-lg"></th>
            </tr>
    
            @foreach($users as $user)
            @if($user->id !== auth()->id())
            <tr class="bg-gray-900 text-white border-b-2">
                <td class="py-4 px-4 rounded-l-lg">{{$user->id}}</td>
                <td class="py-4">{{$user->name}}</td>
                <td class="py-4">{{$user->is_admin ? 'Yes' : 'No'}}</td>
                <td class="py-4">{{$user->email}}</td>
                <td class="py-4">{{$user->created_at}}</td>
                <td class="py-4"><a href="/users/message/{{$user->id}}" class="bg-amber-600 py-2 px-4 rounded-lg hover:bg-gray-900 hover:text-white">Message</a></td>
                <td class="py-4"><form action="/users/delete/{{$user->id}}" method="POST">
                    @csrf
                    <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-700 text-white p-2 rounded-lg hover:bg-gray-900">Delete</button>
                </form></td>
                @if(!$user->is_admin)
                    <td class="py-4 px-4 rounded-r-lg"><form action="/admin/give/{{$user->id}}" method="POST">
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-700 text-white p-2 rounded-lg hover:bg-gray-900">Give Admin</button>
                    </form></td>
                @else 
                <td class="py-4 px-4 rounded-r-lg"><form action="/admin/take/{{$user->id}}" method="POST">
                    @csrf
                    <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-700 text-white p-2 rounded-lg hover:bg-gray-900">Delete Admin Right</button>
                </form></td>
                @endif
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</x-layout>