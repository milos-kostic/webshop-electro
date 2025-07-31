{{-- resources/views/home.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200">
            Welcome to Webshop Electro
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-extrabold text-blue-600">Your Smart Electronics Partner</h1>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
                    Explore a wide range of electronics. Designed for both users and admins.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-dashboard-card 
                    href="{{ route('products.index') }}" 
                    color="blue"
                    icon="🛒"
                    title="Browse Products"
                />

                @auth
                    @if($user->role === 'admin')
                        <x-dashboard-card 
                            href="{{ route('admin.dashboard') }}" 
                            color="red"
                            icon="🛠"
                            title="Admin Dashboard"
                        />
                    @else
                        <x-dashboard-card 
                            href="{{ route('dashboard') }}" 
                            color="green"
                            icon="👤"
                            title="Your Dashboard"
                        />
                    @endif
                @else
                    <x-dashboard-card 
                        href="{{ route('login') }}" 
                        color="gray"
                        icon="🔐"
                        title="Login to Continue"
                    />
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
