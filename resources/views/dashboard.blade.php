<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    @if(auth()->user()->role === 'admin')
                        <p class="mt-4 font-semibold text-lg">Welcome, Admin!</p>
                        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 underline">
                            Go to Admin Dashboard
                        </a>
                    @else
                        <p class="mt-4">Welcome, valued user!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
