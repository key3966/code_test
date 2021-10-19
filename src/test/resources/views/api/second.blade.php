<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">API 2</h2>
        </div>
    </x-slot>
    <div class="flex justify-center w-screen">
        <table class="border-collapse w-screen m-8">
            <thead class="bg-gray-50">
            <tr>
                <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">ID</th>
                <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Title</th>
                <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Likes</th>
                <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Tags</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">ID</span>
                        {{ $item["id"] }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Title</span>
                        {{ $item["title"] }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Likes</span>
                        {{ $item["likes_count"] }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Tags</span>
                        {{ implode(',', array_map(function ($tags) { return $tags["name"]; },$item["tags"])) }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
