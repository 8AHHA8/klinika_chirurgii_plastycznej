<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-gray-800 leading-tight" style="margin-left: 35rem">
            {{ __('Witaj') }} {{ Auth::user()->name }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white bg-gray-100 shadow sm:rounded-lg">
                    @include('profile.partials.update-profile-information-form')
            </div>

            <div class="p-4 sm:p-8 bg-white bg-gray-100 shadow sm:rounded-lg">
                    @include('profile.partials.update-password-form')
            </div>

            <div class="p-4 sm:p-8 bg-white bg-gray-100 shadow sm:rounded-lg">
                    @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
