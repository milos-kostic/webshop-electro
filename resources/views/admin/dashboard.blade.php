{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-3xl font-bold mb-6">Welcome back, {{ Auth::user()->name }}!</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Products Card --}}
                        <x-dashboard-card 
                            href="{{ route('products.index') }}" 
                            color="blue"
                            icon="🛒"
                            title="Manage Products"
                        />
                        
                        {{-- Users Card --}}
                        <x-dashboard-card 
                            href="#" 
                            color="green"
                            icon="👤"
                            title="Manage Users"
                            disabled="true"
                        />
                        
                        {{-- Orders Card --}}
                        <x-dashboard-card 
                            href="#" 
                            color="purple"
                            icon="📦"
                            title="View Orders"
                            disabled="true"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>