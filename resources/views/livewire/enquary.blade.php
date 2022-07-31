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
      
      <div>
        <div class="max-w-sm  bg-white shadow sm:rounded-lg overflow-hidden ">
          <div class="item-center px-6 py-3 bg-gray-900">
            <h1 class="mx-3 text-white font-semibold text-lg">Call Information</h1>
          </div>
          <div class="p-5">
            @if($call_lead)
            Now calling {{$call_lead->name}} ({{$call_lead->phone_number}})
            <textarea
              class="form-control mt-1 block w-full h-16 px-3 py-1.5 text-base font-normal text-gray-700bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="exampleFormControlTextarea1" wire:model="enquiry.call_breif" rows="3"
              placeholder="Enter Call Brief"></textarea>
            <div class="flex my-5">
              <span class="text-sm  border-2 rounded-1 px-4 py-2 bg-gray-100 whitespace-nowrap mb-5">Conclusion</span>
              <select wire:model="enquiry.call_status" class="text-sm   rounded-r px-5 py-2 mb-5 w-full"
                name="call_Status" id=""><br>
                <option  selected>Select Option</option>
                <option value="Received" selected>Received</option>
                <option value="Not Connected" selected>Not Connected</option>
              </select>
            </div>
            <div class="flex -mt-6">
              <span class="text-sm  border-2 rounded-1 px-4 py-2 bg-gray-100 whitespace-nowrap mb-5">Delivery Status</span>
              <select wire:model="enquiry.devlivery_status" class="text-sm   rounded-r px-5 py-2 mb-5 w-full"
                name="devlivery_status" id=""><br>
                <option selected>Delivery Status</option>
                <option value="Delivery Received" selected>Delivery Received</option>
                <option value="Delivery Not Received" selected>Delivery Not Received</option>
              </select>
            </div>
            <div class="flex-auto flex space-x-3">
              <button wire:click="saveCall()"
                class="mr-3 mb-4 ml-5 text-sm bg-green-500 hover:bg-green-700 text-white py-2 px-4 font-semibold rounded-xl focus:outline-none focus:shadow-outline">Save
                Information</button>
                @else
                {{'Select User to call!'}}
                @endif
            </div>
          </div>
          <div class="max-w-sm bg-white shadow sm:rounded-lg my-4 overflow-hidden">
            <div class=" items-center px-6 py-3 bg-gray-900">
              <h1 class="mx-3 text-white font-semibold text-lg">Call History</h1>
            </div>
            @foreach ($enquires as $item)
            <div class="w-full p-3 py-5 border-l-2 border-white hover:border-blue-500 shadow">
              <div class="flex justify-between">
                <div>
                  <p class="font-semibold text-sm">{{$item->call_status}}: Kath City</p>
                  <p class="text-gray text-xs pt-2">{{$item->call_breif}}</p>
                  <p class="text-gray text-xs pt-2">{{$item->devlivery_status}}</p>
                </div>
                <div>
                  <h1>{{$caller_name}}</h1>
                  <p class="text-gray text-xs pt-2">{{date('D M Y H:i',strtotime($item->created_at))}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
 
      </div>
  </div>
  </div>