<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Trainee/ create') }}
            </h2>
            <a href="{{route('trainee.index')}}" class="mr-4 px-5 py-2 hover:text-white text-blue-800 rounded-md border border-blue-800 hover:border-blue-500 hover:bg-blue-500">Go back</a>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('trainee.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="p-6 text-gray-900">
                    <div class=" pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Trainee Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>
                  
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                          <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                            <div class="mt-2">
                              <input type="text" value="{{old('full_name')}}" name="full_name" id="full_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-3">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Certificate</label>
                            <div class="mt-2">
                              <input id="certificate_image" name="certificate_image" type="file"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                          </div>
                          
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                          </div>
                      </div>
                </div>
               
            </form>
            
            </div>
        </div>
    </div>
   
</x-app-layout>
