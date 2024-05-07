<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Produit') }}
            </h2>
            <a href="{{route('product.create')}}"
            class="bg-emerald-400 px-2 py-1 rounded-md  text-white hover:bg-emerald-300">créer un produit</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div className="overflow-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-gray-500">
                                <tr class="text-nowrap">
                                    <th class="px-3 py-3 text-center">ID</th>
                                    <th class="px-3 py-3">IMAGE</th>
                                    <th class="px-3 py-3">NOM</th>
                                    <th class="px-3 py-3 text-center">QUANTITE</th>
                                    <th class="px-3 py-3 text-center">PRIX (F CFA)</th>
                                    <th class="px-3 py-3 text-right">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-3 py-2 text-nowrap text-center">{{$product->id}}</td>
                                        <td class="px-3 py-2 text-nowrap"><img src="{{ url('storage/' . $product->image_path) }}" class="w-20 rounded-lg"/></td>
                                        <td class="px-3 py-2 text-nowrap">{{$product->name}}</td>
                                        <td class="px-3 py-2 text-nowrap text-center">{{$product->quantity}}</td>
                                        <td class="px-3 py-2 text-nowrap text-center">{{ number_format($product->price, 0, ',', ' ') }}</td>
                                        <td class="px-3 py-2 text-nowrap text-right">
                                            <a
                                                href="{{route('product.edit',$product)}}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-1"
                                            >
                                                Editer
                                            </a>

                                            <form action="{{route('product.destroy',$product)}}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button
                                                    type="submit"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline mx-1"
                                                >
                                                    supprimer
                                                </button>
                                            </form>
                                        
                                        </td>
                                    </tr>

                                @endforeach

                            
                            
                            
                            </tbody>
                        
                        
                        
                        
                        
                        </table>
                        <div class="p-3">
                        {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
