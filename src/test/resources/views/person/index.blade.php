<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Person</h2>
        </div>
    </x-slot>
    <div class="flex justify-center w-screen">
        <table class="border-collapse w-screen m-8">
            <thead class="bg-gray-50">
            <tr>
                <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">ID</th>
                <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Name</th>
                <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Age</th>
                <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Show</th>
            </tr>
            </thead>
            <tbody>
            @foreach($people as $person)
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">ID</span>
                        {{ $person->id }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                        {{ $person->name }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Age</span>
                        {{ $person->age() }}
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light flex justify-center">
                        <div class="mr-3">
                            <form action="{{ route('person.show',$person) }}" method="GET">
                                @csrf
                                <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-1 px-6 inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    <span class="ml-2">Show</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
