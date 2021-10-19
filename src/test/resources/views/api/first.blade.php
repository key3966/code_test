<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Test API 1</h2>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full">
            <div class="bg-white p-3">
                <div class="flex justify-between items-center border-b border-black pb-1 mb-2">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">Headers</h3>
                </div>

                <table class="border-collapse w-full">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Name</th>
                        <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                            Date
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Value</span>
                            {{ $headers["Date"][0] }}
                        </td>
                    </tr>
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                            Total Count
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Value</span>
                            {{ $headers["Total-Count"][0] }}
                        </td>
                    </tr>
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                            ETag
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Value</span>
                            {{ $headers["ETag"][0] }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="w-full mt-4">
            <div class="bg-white p-3">
                <div class="flex justify-between items-center border-b border-black pb-1 mb-2">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">Items</h3>
                </div>

                <table class="border-collapse w-full">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">ID</th>
                        <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Title</th>
                        <th class="p-3 font-bold uppercase text-gray-500 border-gray-300 hidden lg:table-cell">Likes</th>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
