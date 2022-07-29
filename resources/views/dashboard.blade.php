<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-around align-center">
            @include('components.buttons.add-payment-button')
        </div>
    </x-slot>
    <div class="px-2">
        <div class="pt-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-slate-700 text-white">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <div class="total-price">
                            <div class="flex justify-center align-middle">
                                <span class="text-m leading-8">支払合計:&nbsp;</span>
                                <span class="text-xl leading-8">¥10000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.payment-per-person')
        @include('components.payment-per-person')
        @include('components.payment-per-person')
        @include('components.payment-per-person')
        @include('components.payment-per-person')
    </div>
    <div id="detail-modal"></div>
</x-app-layout>
