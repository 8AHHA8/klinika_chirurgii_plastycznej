<head>
    <link href="{{ asset('css/booking.css') }}" rel="stylesheet">
</head>

<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
        <a href="{{ route('welcome') }}" class="text-black-500 hover:text-red-700">
        {{ __('Welcome') }} {{ Auth::user()->name }}
        </a>
    </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="bg-white bg-gray-800 shadow sm:rounded-lg">
                    <div class="p-4">
                        @if (session('error'))
                            <div class="error-message changecolor">{{ session('error') }}</div>
                        @endif
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
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Pesel</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="transaction-table">
                                @foreach ($transactions as $transaction)
                                    <tr data-id="{{ $transaction->id }}" class="{{ $transaction->date < now() ? 'bg-blue-400 hover:bg-blue-500' : '' }} hover:bg-gray-100 {{ $transaction->date == now()->format('Y-m-d') ? 'bg-purple-600 hover:bg-purple-700' : '' }}">
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
                                                <form method="POST" action="{{ route('transactions.delete', $transaction->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                                </form>
                                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" onclick="editTransaction(event, '{{ $transaction->id }}')">Edit</button>
                                                <form action="/transactions/{{$transaction->id}}/{{ Auth::user()->id }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Accept</button>
                                                </form>
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


    <div class="flex justify-center items-center " style="margin-left: 30rem; margin-bottom: 5rem;">
        <div class="grid grid-cols-1 gap-2 mt-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="p-2">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="p-2">
                    @include('profile.partials.update-password-form')
                    <div style="margin-top: 10px;">@include('profile.partials.delete-user-form')</div>
                </div>
            </div>
        </div>
    </div>



        </div>
    </div>

    <script>
    function editTransaction(event, transactionId){


    // wyłączyć csrf + ustawić ukryte pole metod jako PUT

    var row = event.target.closest('tr');
    var cells = row.getElementsByTagName('td');

    var date = cells[2].innerText;
    var price = cells[3].innerText;
    var surgeryName = cells[4].innerText;
    var name = cells[5].innerText;
    var surname = cells[6].innerText;
    var phoneNumber = cells[7].innerText;
    var email = cells[8].innerText;
    var pesel = cells[9].innerText;

    const tr = document.createElement("TR");

    const td = document.createElement("TD");

    const newForm = document.createElement("form");

    tr.appendChild(newForm);
    var input1 = document.createElement("INPUT");
    newForm.setAttribute("action", '/transactions/'+ transactionId);
    newForm.setAttribute("method", "POST");

    const td1 = document.createElement("TD");

    td1.appendChild(input1);
    input1.setAttribute("type", "hidden");
    input1.setAttribute("name", "_method");
    input1.setAttribute("value", "PUT");

    newForm.appendChild(input1);

    var input2 = document.createElement("INPUT");

    const td2 = document.createElement("TD");

    td2.appendChild(input2);
    input2.setAttribute("type", "text");
    input2.setAttribute("name", "date");
    input2.setAttribute("value", date);

    newForm.appendChild(input2);

    var input3 = document.createElement("INPUT");

    const td3 = document.createElement("TD");

    td3.appendChild(input3);
    input3.setAttribute("type", "text");
    input3.setAttribute("name", "price");
    input3.setAttribute("value", price);

    newForm.appendChild(input3);

    var input4 = document.createElement("INPUT");

    const td4 = document.createElement("TD");

    td4.appendChild(input4);
    input4.setAttribute("type", "text");
    input4.setAttribute("name", "surgery_name");
    input4.setAttribute("value", surgeryName);

    newForm.appendChild(input4);

    var input5 = document.createElement("INPUT");

    const td5 = document.createElement("TD");

    td5.appendChild(input5);
    input5.setAttribute("type", "text");
    input5.setAttribute("name", "name");
    input5.setAttribute("value", name);

    newForm.appendChild(input5);

    var input6 = document.createElement("INPUT");

    const td6 = document.createElement("TD");

    td6.appendChild(input6);
    input6.setAttribute("type", "text");
    input6.setAttribute("name", "surname");
    input6.setAttribute("value", surname);

    newForm.appendChild(input6);

    var input7 = document.createElement("INPUT");

    const td7 = document.createElement("TD");

    td7.appendChild(input7);
    input7.setAttribute("type", "text");
    input7.setAttribute("name", "phone_number");
    input7.setAttribute("value", phoneNumber);

    newForm.appendChild(input7);

    var input8 = document.createElement("INPUT");

    const td8 = document.createElement("TD");

    td8.appendChild(input8);
    input8.setAttribute("type", "text");
    input8.setAttribute("name", "email");
    input8.setAttribute("value", email);

    newForm.appendChild(input8);

    var input9 = document.createElement("INPUT");

    const td9 = document.createElement("TD");

    td9.appendChild(input9);
    input9.setAttribute("type", "text");
    input9.setAttribute("name", "pesel");
    input9.setAttribute("value", pesel);

    newForm.appendChild(input9);

    var button1 = document.createElement("BUTTON");

    td.appendChild(button1);
    button1.setAttribute("type", "submit");
    button1.setAttribute("class", "bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded");
    button1.textContent = "Save";

    newForm.appendChild(button1);

    const table = document.getElementById("transaction-table");

    const el1 = document.querySelector('[data-id="'+transactionId+'"]');
    console.log(el1);

    tr.appendChild(td);

    td.appendChild(newForm);

    el1.replaceWith(tr);
    }

    </script>


</x-app-layout>
