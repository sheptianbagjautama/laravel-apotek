<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row w-full items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Details') }}
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
                 </div>
                 <hr class="my-3">
                 <h3 class="text-xl font-bold text-indigo-950">
                    List Of Item
                 </h3>

                 <div class="grid-cols-4 grid gap-x-10">
                    <div class="flex flex-col gap-y-5 col-span-2">
                        <div class="item-card flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-xl font-bold text-indigo-950">
                                        Name
                                    </h3>
                                    <p class="text-base text-slate-500">
                                        Price
                                    </p >
                                </div>
                            </div>
                            <p class="text-base text-slate-500">
                                Category
                            </p>
                        </div>
                        <div class="item-card flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-xl font-bold text-indigo-950">
                                        Name
                                    </h3>
                                    <p class="text-base text-slate-500">
                                        Price
                                    </p >
                                </div>
                            </div>
                            <p class="text-base text-slate-500">
                                Category
                            </p>
                        </div>
                        <div class="item-card flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-xl font-bold text-indigo-950">
                                        Name
                                    </h3>
                                    <p class="text-base text-slate-500">
                                        Price
                                    </p >
                                </div>
                            </div>
                            <p class="text-base text-slate-500">
                                Category
                            </p>
                        </div>
                        <div class="item-card flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-xl font-bold text-indigo-950">
                                        Name
                                    </h3>
                                    <p class="text-base text-slate-500">
                                        Price
                                    </p >
                                </div>
                            </div>
                            <p class="text-base text-slate-500">
                                Category
                            </p>
                        </div>
                        <div class="item-card flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-xl font-bold text-indigo-950">
                                        Name
                                    </h3>
                                    <p class="text-base text-slate-500">
                                        Price
                                    </p >
                                </div>
                            </div>
                            <p class="text-base text-slate-500">
                                Category
                            </p>
                        </div>
                  </div>
                    <div class="flex flex-col gap-y-5 col-span-2">
                        <img src="" alt="" class="w-[300px] bg-red-300 h-[400px]"/>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
