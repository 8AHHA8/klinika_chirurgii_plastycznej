<head>
<link href="{{ asset('css/background.css') }}" rel="stylesheet">

</head>
<div class="image-background">
    <x-app-layout>
            <div class="header-container">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                    <a href="{{ route('welcome') }}" class="text-black-500 hover:text-red-700">
                        {{ __('Welcome') }} {{ Auth::user()->name }}
                    </a>
                </h2>
            </div>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
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

