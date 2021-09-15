<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-table>
                        <x-slot name="head">
                            <x-table.heading>Name</x-table.heading>
                            <x-table.heading>Email</x-table.heading>
                        </x-slot>

                        <x-slot name="body">
                            @foreach($users as $user)
                                <x-table.row>
                                    <x-table.cell>{{ $user->name }}</x-table.cell>
                                    <x-table.cell>{{ $user->email }}</x-table.cell>
                                </x-table.row>
                            @endforeach
                        </x-slot>
                    </x-table>

                    {{ $users->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
