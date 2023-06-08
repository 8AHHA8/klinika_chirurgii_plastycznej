<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left: 35rem">
            {{ __('Witaj') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8 space-y-6">
  
            <div class="p-3 sm:p-1 bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    <table class="border-collapse" style="margin-left: 8rem; margin-bottom: 2rem;">
                        <thead>
                            <tr>
                                <th class="border border-gray-800 p-3">Date</th>
                                <th class="border border-gray-800 p-3">Price</th>
                                <th class="border border-gray-800 p-3">Surgery Name</th>
                                <th class="border border-gray-800 p-3">Name</th>
                                <th class="border border-gray-800 p-3">Surname</th>
                                <th class="border border-gray-800 p-3">Phone Number</th>
                                <th class="border border-gray-800 p-3">E-mail</th>
                                <th class="border border-gray-800 p-3">Pesel</th>
                                <th class="border border-gray-800 p-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr class="{{ $transaction->date < now() ? 'bg-blue-400 hover:bg-blue-500' : '' }} hover:bg-gray-100 {{ $transaction->date == now() ? 'bg-purple-400 hover:bg-purple-500' : '' }}">
                                    <td class="border border-gray-800 p-3" style="min-width: 10rem;">{{ $transaction->date }}</td>
                                    <td class="border border-gray-800 p-3" style="min-width: 8rem;">{{ $transaction->price }}</td>
                                    <td class="border border-gray-800 p-3" style="min-width: 15rem;">{{ $transaction->surgery_name }}</td>
                                    <td class="border border-gray-800 p-3" style="min-width: 8rem;">{{ $transaction->name }}</td>
                                    <td class="border border-gray-800 p-3" style="min-width: 8rem;">{{ $transaction->surname }}</td>
                                    <td class="border border-gray-800 p-3" style="min-width: 12rem;">{{ $transaction->phone_number }}</td>
                                    <td class="border border-gray-800 p-3" style="min-width: 12rem;">{{ $transaction->email }}</td>
                                    <td class="border border-gray-800 p-3" style="min-width: 8rem;">{{ $transaction->pesel }}</td>
                                    <td class="border border-gray-800 p-3" style="min-width: 15rem;">
                                        <div class="flex">
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Accept</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination">
                                    @if ($transactions->onFirstPage())
                                        <a class="btn btn-secondary disabled" href="#" style="margin-left: 50rem;">Previous</a>
                                    @else
                                        <a class="btn btn-secondary bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded" href="{{ $transactions->previousPageUrl() }}" style="margin-left: 50rem;">Previous</a>
                                    @endif

                                    @if ($transactions->hasMorePages())
                                        <a class="btn btn-secondary bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded" href="{{ $transactions->nextPageUrl() }}">Next</a>
                                    @else
                                        <a class="btn btn-secondary disabled" href="#">Next</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                    @include('profile.partials.update-password-form')
            </div>

            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                    @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
