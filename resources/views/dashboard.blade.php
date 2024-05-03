<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-2">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
              <h3 class="text-amber-500 text-2xl font-semibold">
                Produits
              </h3>
              <p class="text-xl mt-4">
                <span class="mr-2">100</span>/
                <span class="ml-2">200</span>
              </p>
            </div>
          </div>
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
              <h3 class="text-blue-500 text-2xl font-semibold">
                Clients
              </h3>
              <p class="text-xl mt-4">
                <span class="mr-2">15</span>/
                <span class="ml-2">30</span>
              </p>
            </div>
          </div>
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
              <h3 class="text-green-500 text-2xl font-semibold">
                Commandes
              </h3>
              <p class="text-xl mt-4">
                <span class="mr-2">17</span>/
                <span class="ml-2">40</span>
              </p>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
