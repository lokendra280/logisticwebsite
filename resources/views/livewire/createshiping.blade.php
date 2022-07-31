<main>
    <div class="max-w-7xi mx-auto py-6 sm:px-6 lg:px-8">
        <script src="https://cdn.tailwindcss.com"></script>
       
        <div class="md:grid md:grid-cols-3 md:gap-6 px-6">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-16">
                    <h1 class="text-2xl	 font-bold text-gray-900">Create Shiping</h1>
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
                    <form wire:submit.prevent="Send">
                        @csrf
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                        <div class="grid grid-cols-2 gap-4 ">
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="name">Name</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="name" type="text" name="name" wire:model="name" 
                                    autocomplete="name" required/>@error('name') <span class="text-red-600">{{ $message
                                    }}</span> @enderror
                            </div>

                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">Company Name</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="pasword" type="text" name="company_name" wire:model="company_name"
                                    autocomplete="name" required/>
                                @error('company_name') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">Email</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="pasword" type="email" name="email" wire:model="email" autocomplete="name" required/>

                                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">Contact
                                    Number</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="pasword" type="number" name="phone_number" wire:model="phone_number" 
                                    autocomplete="name" minlength="10" maxlength="10" required/>
                                @error('phone_number') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">Street</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="pasword" type="text" name="Street" wire:model="Street" autocomplete="name" required/>
                                @error('Street') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">City</label>
                                <select name="pacakage_type" id=""
                                    class="border-gray-300 h-10 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    wire:model="city" required>
                                    <option value="">Select you City</option>
                                    @foreach ($add_branch as $item)
                                    <option value="{{$item->add_branch}}">{{$item->add_branch}}</option>
                                    @endforeach
                                    {{-- <option value="Nepaljung">Select City</option>
                                    <option value="Nepaljung">Nepaljung</option>
                                    <option value="Dang">Dang</option>
                                    <option value="Chitwan">Chitwan</option>
                                    <option value="Chitwan">Pokhara</option> --}}
                                
                                </select>
                                @error('city') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>


                        </div>
                        <div class="grid grid-cols-4 gap-4 py-4 ">





                            <div> <label class="block font-bold text-lg text-gray-600" for="pasword">Product
                                    Type</label>
                                <select wire:change="prices" wire:model="selected_product" 
                                    class="border-gray-300 h-10 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                  required/>
                                
                                  <option value="">Select product</option>
                                    @foreach ($items as $item)
                                    <option value="{{$item->id}}">{{$item->product_type}}</option>
                                    @endforeach
                                    
                                </select>
                                @error('selected_product') <span class="text-red-600">{{ $message }}</span> @enderror
                            
                                
                                
                                <h1 class="pt-3">shipping price = Rs. {{$shiping_price}}</h1>
                            </div>
                            {{-- <div> <label class="block font-bold text-lg text-gray-600" for="pasword">Package
                                    Type</label>
                                <select
                                    class="border-gray-300 h-10 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    wire:model="pacakage_type">
                                    @foreach ($items as $item)

                                    <option value="{{$item->package_type}}">{{$item->package_type}}</option>

                                    @endforeach

                                </select>
                                @error('pacakage_type') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div> --}}
                            <div> <label class="block font-bold text-lg text-gray-600" for="pasword">Quantity</label>
                                <input wire:change="prices"
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="pasword" type="number" name="password" name="quantity" autocomplete="name"
                                    wire:model="quantity" required/>
                                @error('quantity') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div> <label class="block font-bold text-lg text-gray-600" for="pasword">Weight</label>
                                <input wire:change="prices"
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    id="pasword" type="number" name="password" wire:model="weight" autocomplete="name"
                                    wire:model="weight" name="weight" required/>
                                @error('weight') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div> <label class="block font-bold text-lg text-gray-600" for="pasword">Payment Methods</label>
                                <div class="form-check pt-3">
                                <input type="radio" id="esewa" name="payment" wire:model="payment" value="esewa" required/>
                                @error('payment') <span class="text-red-600">{{ $message }}</span> @enderror
                                <label for="esewa">Esewa</label>
                                <input type="radio" id="khalti" name="payment" wire:model="payment" value="khalti" required/>
                                @error('payment') <span class="text-red-600">{{ $message }}</span> @enderror
                                <label for="esewa">Khalti</label><br>
                            </div>
                            </div>
                        </div>
                        <div
                            class=" justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-b1-md sm:rounded-br-md">
                            <button type="submit"
                          
                                class=" inline-block font-bold px-6 py-2.5 bg-purple-900 text-white  text-md leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                               >
                                Save
                            </button>
                        </div>
                    </div>

                </div>
            </form>

</main>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendEmail(){
        Email.send({
    Host : "smtp.yourisp.com",
    Username : "username",
    Password : "password",
    To : 'them@website.com',
    From : "you@isp.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
</script>
</div>