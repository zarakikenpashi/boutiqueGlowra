<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produits') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100">
                    <form 
                        action="{{route("product.store")}}" 
                        method="post" 
                        enctype="multipart/form-data"
                        class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        @csrf
                        <div class="mb-5">
                            <x-input-label for="image_path" :value="__('Image')" />
                            <x-text-input id="image_path" name="image_path" type="file" class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('image_path')" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="name" :value="__('Nom')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-textarea-input id="description" name="description" type="text" class="mt-1 block w-full" required ></x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="price" :value="__('Prix')" />
                            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="quantity" :value="__('Quantité')" />
                            <x-text-input id="quantity" name="quantity" type="text" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="category_id" :value="__('Catégorie')" />
                            <x-selectoption-input
                                name="category_id"
                                id="category_id"
                                class="mt-1 block w-full"
                            >
                            
                                <option value="">Selectionnez une catégorie</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </x-selectoption-input>
                            <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
                        </div>

                        <div class="text-right">
                <a
                  href="{{route("product.index")}}"
                  class="bg-gray-100 py-1 px-3 text-gray-800 rounded shadow transition-all hover:bg-gray-200 mr-2"
                >
                  Annuler
                </a>
                <button 
                    class="bg-emerald-500 py-1 px-3 text-white rounded shadow transition-all hover:bg-emerald-600"
                    type="submit">
                  Enregistrer
                </button>
              </div>

                    
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
