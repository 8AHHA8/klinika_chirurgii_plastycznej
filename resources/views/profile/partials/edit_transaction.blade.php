<section class="space-y-6">
    <form action="{{ route('updateTransaction', $transaction->id) }}" method="POST" class="p-6">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-800">
            Edit Transaction
        </h2>

        <div class="mt-6">
            <label for="date" class="block text-sm font-medium text-gray-800">Date</label>
            <input type="text" name="date" id="date" value="{{ $transaction->date }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="mt-6">
            <label for="price" class="block text-sm font-medium text-gray-800">Price</label>
            <input type="text" name="price" id="price" value="{{ $transaction->price }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="mt-6">
            <label for="surgery_name" class="block text-sm font-medium text-gray-800">Price</label>
            <input type="text" name="surgery_name" id="surgery_name" value="{{ $transaction->surgery_name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="mt-6">
            <label for="name" class="block text-sm font-medium text-gray-800">Price</label>
            <input type="text" name="name" id="name" value="{{ $transaction->name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="mt-6">
            <label for="surname" class="block text-sm font-medium text-gray-800">Price</label>
            <input type="text" name="surname" id="surname" value="{{ $transaction->surname }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="mt-6">
            <label for="phone_number" class="block text-sm font-medium text-gray-800">Price</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ $transaction->phone_number }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="mt-6">
            <label for="email" class="block text-sm font-medium text-gray-800">Price</label>
            <input type="text" name="email" id="email" value="{{ $transaction->email }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="mt-6">
            <label for="pesel" class="block text-sm font-medium text-gray-800">Price</label>
            <input type="text" name="pesel" id="pesel" value="{{ $transaction->pesel }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </div>
    </form>
</section>