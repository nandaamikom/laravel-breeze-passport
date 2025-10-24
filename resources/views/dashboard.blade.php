<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center animate-fadeIn">
              <div class="p-6 text-center">
                    <h1 class="text-3xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 via-blue-500 to-purple-500 animate-fadeIn">
                        Welcome back, {{ Auth::user()->name ?? 'User' }} 🎉
                    </h1>

                    <p class="mt-3 text-gray-300 animate-fadeInSlow">
                        You're successfully logged in!  
                        Ready to explore your dashboard?
                    </p>

                    <a href="{{ route('dashboard') }}"
                    class="inline-block mt-6 px-6 py-2 rounded-lg bg-gradient-to-r from-indigo-500 to-blue-600 text-white font-semibold hover:scale-105 transition-transform duration-300 shadow-lg hover:shadow-blue-500/50">
                        Go to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
