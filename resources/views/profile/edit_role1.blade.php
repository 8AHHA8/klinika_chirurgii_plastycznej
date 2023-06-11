<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Welcome') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="bg-white bg-gray-800 shadow sm:rounded-lg">
                    <div class="p-4">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Doctor ID</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Surgery Name</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Surname</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">E-mail</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Pesel</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($transactions as $transaction)
                                    <tr class="{{ $transaction->date < now() ? 'bg-blue-400 hover:bg-blue-500' : '' }} hover:bg-gray-100 {{ $transaction->date == now()->format('Y-m-d') ? 'bg-purple-600 hover:bg-purple-700' : '' }}">
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->id }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->doctor_id }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->date }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->price }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->surgery_name }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->name }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->surname }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->phone_number }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->email }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $transaction->pesel }}</td>
                                        <td class="px-0 py-4 whitespace-no-wrap">
                                            <div class="flex justify-around">
                                                <form method="POST" action="/transactionsDelete/{{$transaction->id}}">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                                </form>
                                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Accept</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-center sm:px-6">
                        @if ($transactions->onFirstPage())
                            <span class="text-gray-500 mr-2">Previous</span>
                        @else
                            <a href="{{ $transactions->previousPageUrl() }}" class="text-gray-100 hover:text-gray-0 bg-gray-700 hover:bg-gray-800 rounded py-2 px-4 mr-2">Previous</a>
                        @endif

                        @if ($transactions->hasMorePages())
                            <a href="{{ $transactions->nextPageUrl() }}" class="text-gray-100 hover:text-gray-0 bg-gray-700 hover:bg-gray-800 rounded py-2 px-4">Next</a>
                        @else
                            <span class="text-gray-500">Next</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white bg-gray-800 shadow sm:rounded-lg">
                    <div class="p-4">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
                <div class="bg-white bg-gray-800 shadow sm:rounded-lg">
                    <div class="p-4">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
                <div class="bg-white bg-gray-800 shadow sm:rounded-lg">
                    <div class="p-4">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
