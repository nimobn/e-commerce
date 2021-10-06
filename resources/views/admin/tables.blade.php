@extends('admin._layouts.master')
@section("title", "محصولات")
@section('body')
    <h3 class="text-gray-700 text-3xl font-medium">محصولات</h3>

    <div class="mt-4">
        
        <div class="mt-6">

            <div class="mt-3 flex flex-col sm:flex-row">
                <div class="flex">
                    <div class="relative">
                        <select class="cursor-pointer h-full rounded-r border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                        </select>
                    </div>

                    <div class="relative">
                        <select class="cursor-pointer h-full border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                            <option>All</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="block relative mt-2 sm:mt-0">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"></path>
                        </svg>
                    </span>

                    <input placeholder="@lang("admin.table.search placeholder")" class="appearance-none rounded-r rounded-l sm:rounded-r-none border border-gray-400 border-b block pr-8 pl-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>
            </div>

            <div class="bg-white shadow rounded-md overflow-hidden my-6">
                <table class="text-right w-full border-collapse">
                    <thead class="border-b">
                        <tr>
                            <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">ستون اول</th>
                            <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">ستون دوم</th>
                            <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">ستون سوم</th>
                            <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">ستون چهارم</th>
                            <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">ستون پنجم</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">New York</td>
                            <td class="py-4 px-6 border-b text-gray-500">200,120</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                <img class="w-20" src="{{ asset('images/product/p1.jpg') }}" alt="">
                            </td>
                            
                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                    <span class="relative">Activo</span>
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 pl-2">@lang("admin.table.edit btn")</a>
                                <a href="#" class="text-red-600 hover:text-red-900 border-r border-gray-600 pr-3">@lang("admin.table.remove btn")</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">Manchester</td>
                            <td class="py-4 px-6 border-b text-gray-500">632,310</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                <img class="w-20" src="{{ asset('images/product/p1.jpg') }}" alt="">
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                    <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                    <span class="relative">Inactive</span>
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 pl-2">@lang("admin.table.edit btn")</a>
                                <a href="#" class="text-red-600 hover:text-red-900 border-r border-gray-600 pr-3">@lang("admin.table.remove btn")</a>
                            </td>
                            
                        </tr>                        
                    </tbody>
                </table>
                <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                    <span class="text-xs xs:text-sm text-gray-900">@lang("admin.table.counter", ['from' => 1, "to" => 20, "total" => 50])</span>

                    <div class="inline-flex mt-2 xs:mt-0">
                        <button class="text-sm bg-gray-200 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r border-l border-gray-300">@lang("admin.table.prev btn")</button>
                        <button class="text-sm bg-gray-200 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">@lang("admin.table.next btn")</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
