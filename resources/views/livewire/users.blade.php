<div>
    <div class="mb-5">
        <input type="text" id="buscar" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" placeholder="Buscar" wire:model="search"/>
    </div>
    <table class="w-full bg-white shadow mt-5 table-auto">
        <thead class="bg-cyan-600 text-white">
            <tr>
                <th class="p-2">ID</th>
                <th class="p-2">User</th>
                <th class="p-2">Email</th>
                <th class="p-2">Address</th>
                <th class="p-2">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users AS $user)
                <tr class="border-b">
                    <td class="p-2 space-y-2">{{ $user->id }}</td>
                    <td class="p-2 space-y-2">{{ $user->name }}</td>
                    <td class="p-2 space-y-2">{{ $user->email }}</td>
                    <td class="p-2 space-y-2">{{ $user->address }}</td>
                    <td class="p-2 space-y-2">{{ $user->role->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</div>
