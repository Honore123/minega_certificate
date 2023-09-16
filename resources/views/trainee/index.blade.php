<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Trainee') }}
            </h2>
            <a href="{{route('trainee.create')}}" class="bg-blue-800 mr-4 px-5 py-2 text-white rounded-md border-blue-800 hover:border-blue-500 hover:bg-blue-500">Add trainee</a>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white">
            List of trainees
            <p class="mt-1 text-sm font-normal text-gray-500">Below is the list of registered and certified trainees</p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                   Names
                </th>
                <th scope="col" class="px-6 py-3">
                    Certificate ID
                 </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($trainees as $trainee)
            <tr class="bg-white border-b">
                <td class="px-6 py-4">
                   {{$loop->iteration++}}
                </td>
                <td class="px-6 py-4">
                  {{$trainee->full_name}}
                </td>
                <td class="px-6 py-4">
                    {{$trainee->slug}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{asset('storage/certificates/'.$trainee->certificate_image)}}" class="font-medium text-blue-600 hover:underline">View</a>
                </td>
            </tr>
           @empty
           <tr>
            <td class="text-center" colspan="3">No units yet!</td>
            </tr>
           @endforelse
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script>
           
        </script>
    </x-slot>
</x-app-layout>
