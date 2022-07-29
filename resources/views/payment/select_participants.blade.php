<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="px-2 py-4">
        <div class="h-24">
            <div class="font-bold text-lg pb-2">
                参加者登録
            </div>
            @include('components.search-box')
        </div>
        <div class="mt-4 pb-4 overflow-x-scroll" style="height: calc(100vh - 20rem);">
            @include('components.participant')
            @include('components.participant')
            @include('components.participant')
            @include('components.participant')
            @include('components.participant')
            @include('components.participant')
            @include('components.participant')
            @include('components.participant')
            @include('components.participant')
        </div>
        <button onclick="location.href='{{ route('payment.create') }}'" class="my-4 text-white bg-emerald-600 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full max-w-lg sm:w-auto px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 block m-auto">支払いを登録</button>
    </div>
</x-app-layout>
