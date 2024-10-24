@extends('index')
@include('components.navbar')


  <div class="bg-white border border-4 rounded-lg shadow relative m-10 font-robotoMono">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Create Note
        </h3>
        
    </div>

    <div class="p-6 space-y-6">
        <form action="/create-note" method="POST" enctype="multipart/form-data">
          @csrf
         
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="title" class="text-sm font-medium text-gray-900 block mb-2">title:</label>
                    <input type="text" name="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Apple Imac 27”" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="visibility" class="text-sm font-medium text-gray-900 block mb-2">Visibility</label>
                    <select name="visibility" id="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                      <option value="public">Public</option>
                      <option value="private">Private</option>
                  </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="cover" class="text-sm font-medium text-gray-900 block mb-2">Note's Cover</label>
                    <input id="picture" type="file"  name="cover" class="flex h-10 w-full rounded-md border border-input bg-white px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
                </div>

                <div class="col-span-full">
                    <label for="description" class="text-sm font-medium text-gray-900 block mb-2">description</label>
                    <textarea  name="description" rows="6"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="description"></textarea>
                </div>

                <div class="col-span-full">
                    <label for="content" class="text-sm font-medium text-gray-900 block mb-2">content</label>
                    <textarea  name="message" rows="6"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="Content"></textarea>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
              <button type="submit" class="text-white bg-slate-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Save all</button>
          </div>
        </form>
    </div>

     

</div>
