<main>
    <div class="max-w-7xi mx-auto py-6 sm:px-6 lg:px-8">
        <script src="https://cdn.tailwindcss.com"></script>
        <div class="md:grid md:grid-cols-3 md:gap-6 px-6">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-16">
                    <h1 class="text-2xl	 font-bold text-gray-900">Add Items</h1>
                    <p class="mt-1 text-md text-justify	  text-gray-600">To create a new category, click
                        theCategorybutton. Let’s enter a name. It’s automatically populated with a relevant slug. We
                        can add anicon. We can select whether it’s a top-level category or subcategory. Once you’ve
                        done that, you can change the order in.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="w-full">
                    @if (session()->has('message'))
                    <div class="text-emerald-600">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                        <div class="grid grid-cols-3 gap-4 ">
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="name">Product Type</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="name" type="text" name="name" wire:model="product_type"
                                    autocomplete="name">@error('name') <span class="text-red-600">{{ $message
                                    }}</span> @enderror
                            </div>
                       
                            {{-- <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">Package Type</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="pasword" type="text" name="company_name" wire:model="package_type"
                                    autocomplete="name">
                                @error('company_name') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div> --}}
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">Price</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="pasword" type="number" name="email" wire:model="price"
                                    autocomplete="name">
                                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                        
                          
                    </div>
                    <div
                    class=" justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-b1-md sm:rounded-br-md">
                    <button type="submit"
                        class=" inline-block font-bold px-6 py-2.5 bg-purple-900 text-white  text-md leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                        wire:click="save()">
                        Save
                    </button>
                </div>
                </div>
               
            </div>
           
</main>
</div>
