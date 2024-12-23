<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row w-full items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ Auth::user()->hasRole('owner') ? __('Apotek Orders') : __('My Transactions') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white flex flex-col gap-y-5 overflow-hidden shadow-sm sm:rounded-lg p-10">
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                         <div>
                            <p class="text-base text-slate-500">
                                Total Transaksi
                             </p >
                             <h3 class="text-xl font-bold text-indigo-950">
                                 18.000.000
                             </h3>
                         </div>
                    </div>
                    <div>
                        <p class="text-base text-slate-500">
                           Date
                         </p >
                         <h3 class="text-xl font-bold text-indigo-950">
                             25 January 2024
                         </h3>
                     </div>
                     <span class="py-1 px-3 rounded-full bg-orange-500">
                        <p class="text-white font-bold text-sm">
                            PENDING
                        </p>
                     </span>
                     <div class="flex flex-row items-center gap-x-5">
                         <a href="#" class="font-bold py-3 px-5 rounded-full text-white bg-indigo-700">View Details</a>
                     </div>
                 </div>
                 <hr class="my-3">
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                         <div>
                            <p class="text-base text-slate-500">
                                Total Transaksi
                             </p >
                             <h3 class="text-xl font-bold text-indigo-950">
                                 18.000.000
                             </h3>
                         </div>
                    </div>
                    <div>
                        <p class="text-base text-slate-500">
                           Date
                         </p >
                         <h3 class="text-xl font-bold text-indigo-950">
                             25 January 2024
                         </h3>
                     </div>
                     <span class="py-1 px-3 rounded-full bg-orange-500">
                        <p class="text-white font-bold text-sm">
                            PENDING
                        </p>
                     </span>
                     <div class="flex flex-row items-center gap-x-5">
                         <a href="#" class="font-bold py-3 px-5 rounded-full text-white bg-indigo-700">View Details</a>
                     </div>
                 </div>
                 <hr class="my-3">
                    <div class="item-card flex flex-row justify-between items-center">
                        <div class="flex flex-row items-center gap-x-3">
                            <div>
                                <p class="text-base text-slate-500">
                                    Total Transaksi
                                </p >
                                <h3 class="text-xl font-bold text-indigo-950">
                                    18.000.000
                                </h3>
                            </div>
                        </div>
                        <div>
                            <p class="text-base text-slate-500">
                            Date
                            </p >
                            <h3 class="text-xl font-bold text-indigo-950">
                                25 January 2024
                            </h3>
                        </div>
                        <span class="py-1 px-3 rounded-full bg-orange-500">
                            <p class="text-white font-bold text-sm">
                                PENDING
                            </p>
                        </span>
                        <div class="flex flex-row items-center gap-x-5">
                            <a href="{{route('product_transactions.show', 1)}}" class="font-bold py-3 px-5 rounded-full text-white bg-indigo-700">View Details</a>
                        </div>
                    </div>
                    <hr class="my-3">
            </div>
        </div>
    </div>
</x-app-layout>
