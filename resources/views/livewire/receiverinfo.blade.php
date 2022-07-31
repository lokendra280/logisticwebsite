<div class="max-w-7xl mx-auto sm:px-6  py-3 lg:px-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="align-middle sm:rounded-md  inline-block w-full py-4 overflow-hidden bg-white shadow px-3">
      <div>
        @if (session()->has('message'))
        <div class="bg-green-500 border-1 border-green-600 rounded mb-2 mt-2 p-2">
          <h1 class="text-white font-bold first-letter: "></h1>
          {{ session('message') }}
        </div>
      </div>
      @endif
    </div>
    <div class="grid lg:grid-cols-3 sm:grid-cols-1 lg:gap-4">
      <div>
        <div class="max-w-sm bg-white shadow sm:rounded-lg overflow-hidden ">
          <div class="flex items-center px-6 py-3 bg-gray-900">
            <h1 class="mx-3 text-white font-semibold text-lg">Receiver Information</h1>
          </div>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Name:-</label>   {{$current_user->name}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Company Name:-</label>   {{$current_user->company_name}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">City:-</label>   {{$current_user->city}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
          <label for="">Street:-</label>   {{$current_user->street}} 
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Email:-</label>   {{$current_user->email}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Phone Number:-</label>   {{$current_user->phone_number}}
          </h3>
        </div>
        <button
        class="mr-3  ml-2  mb-4 w-32 text-sm bg-green-500 hover:bg-green-700 text-white py-2 px-4 font-semibold rounded-xl focus:outline-none focus:shadow-outline"
        wire:click="selectLead({{$current_user->id}})">Call</button>
      </div>
      <div class="max-w-sm bg-white shadow sm:rounded-lg overflow-hidden ">
        <div class="flex items-center px-6 py-3 bg-gray-900">
          <h1 class="mx-3 text-white font-semibold text-lg">Sender Information</h1>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Name:-</label>   {{$sender_info->name}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Email:-</label>   {{$sender_info->email}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Company Name:-</label>   {{$sender_info->company_name}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">City:-</label>   {{$sender_info->city}}
          </h3>
        </div>
        
       
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Product Type:-</label>       {{$sender_info->items()->first()->product_type}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Phone Number:-</label>   {{$sender_info->phone_number}}
          </h3>
        </div>
        <div class="flex py-1">
          <h3 class="border rounded-r px-4 py-2 w-full ">
         <label for="">Payment Method:-</label>   {{$sender_info->status}}
          </h3>
        </div>
       
      </div>
      
    
  </div>
  </div>