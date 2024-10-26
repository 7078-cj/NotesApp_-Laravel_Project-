@extends('index')
@include('components.navbar')
{{-- <body>
    <form action="/updates-body/{{ $body->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="file" placeholder="input image" name="image">
        @if ($body->image)
            <img src="{{ asset('storage/' . $body->image) }}" alt=""style="width:200px;height:200px">
        @endif
        <textarea name="message">{{ $body->message }}</textarea>
        <input type="submit">
    </form>
</body> --}}

<div class="bg-white border border-4 rounded-lg shadow relative m-10 font-robotoMono">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Edit Body
        </h3>
        <a href="#" onclick="history.back()"><button class="text-white bg-slate-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" >Back</button></a>
        
    </div>

    <div class="p-6 space-y-6">
        <form action="/updates-body/{{ $body->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">Update Pic/Vid(maximum 45mb)</label>
                    <input type="file" name="image" id="product-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"  >
                </div>
                
                
                <div class="col-span-full">
                    <label for="product-details" class="text-sm font-medium text-gray-900 block mb-2">Body Messsage</label>
                    <textarea name="message" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="message">
                        {{ $body->message }}
                    </textarea>
                </div>
            </div>
             <div class="p-6 border-t border-gray-200 rounded-b">
        <button class="text-white bg-slate-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Save all</button>
    </div>
        </form>
        
    </div>

   

