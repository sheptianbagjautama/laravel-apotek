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
                                 {{$productTransaction->total_amout}}
                             </h3>
                         </div>
                    </div>
                    <div>
                        <p class="text-base text-slate-500">
                           Date
                         </p >
                         <h3 class="text-xl font-bold text-indigo-950">
                             {{$productTransaction->created_at}}
                         </h3>
                     </div>
                     @if ($productTransaction->is_paid)
                        <span class="py-1 px-3 rounded-full bg-green-500">
                            <p class="text-white font-bold text-sm">
                                SUCCESS
                            </p>
                        </span>
                     @else
                        <span class="py-1 px-3 rounded-full bg-orange-500">
                            <p class="text-white font-bold text-sm">
                                PENDING
                            </p>
                        </span>
                     @endif

                 </div>
                 <hr class="my-3">
                 <h3 class="text-xl font-bold text-indigo-950">
                    List Of Item
                 </h3>

                 <div class="grid-cols-4 grid gap-x-10">
                    <div class="flex flex-col gap-y-5 col-span-2">
                        @forelse ($productTransaction->transactionDetails as $detail)
                        <div class="item-card flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="{{Storage::url($detail->product->photo)}}" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-xl font-bold text-indigo-950">
                                        {{$detail->product->name}}
                                    </h3>
                                    <p class="text-base text-slate-500">
                                        {{$detail->price}}
                                    </p >
                                </div>
                            </div>
                            <p class="text-base text-slate-500">
                                {{$detail->product->category->name}}
                            </p>
                        </div>
                        @empty
                        <p>Tidak ada data produk.</p>
                        @endforelse
                        <h3 class="text-xl font-bold text-indigo-950">
                            Detail of Delivery
                         </h3>
                         <div class="item-card flex flex-row justify-between items-center">
                            <p class="text-base text-slate-500">
                                Address
                            </p>
                            <h3 class="text-lg font-bold text-indigo-950">
                                {{$productTransaction->address}}
                            </h3>
                        </div>
                         <div class="item-card flex flex-row justify-between items-center">
                            <p class="text-base text-slate-500">
                                City
                            </p>
                            <h3 class="text-lg font-bold text-indigo-950">
                                {{$productTransaction->city}}
                            </h3>
                        </div>
                         <div class="item-card flex flex-row justify-between items-center">
                            <p class="text-base text-slate-500">
                                Post Code
                            </p>
                            <h3 class="text-lg font-bold text-indigo-950">
                                {{$productTransaction->post_code}}
                            </h3>
                        </div>
                         <div class="item-card flex flex-row justify-between items-center">
                            <p class="text-base text-slate-500">
                                Phone Number
                            </p>
                            <h3 class="text-lg font-bold text-indigo-950">
                                {{$productTransaction->phone_number}}
                            </h3>
                        </div>
                         <div class="item-card flex flex-col justify-between items-start">
                            <p class="text-base text-slate-500">
                                Notes
                            </p>
                            <h3 class="text-lg font-bold text-indigo-950">
                                {{$productTransaction->notes}}
                            </h3>
                        </div>

                  </div>
                    <div class="flex flex-col gap-y-5 col-span-2 items-end">
                        <h3 class="text-xl font-bold text-indigo-950">
                            Proof of Payment:
                         </h3>
                        <img src="{{Storage::url($productTransaction->proof)}}" alt="{{$productTransaction->proof}}" class="w-[300px]  h-[400px]"/>
                    </div>
                 </div>

                 <hr class="my-3">

                @role('owner')
                 @if (!$productTransaction->is_paid)
                 <form method="POST" action="{{route('product_transactions.update', $productTransaction)}}">
                    @csrf
                    @method('PUT')
                    <button class="font-bold py-3 px-5 rounded-full text-white bg-indigo-700">
                        Approve Order
                    </button>
                </form>
                 @else
                 <a href="#" class="w-fit font-bold py-3 px-5 rounded-full text-white bg-indigo-700">
                    WhatsApp Customer
                </a>
                 @endif
                @endrole

                @role('buyer')
                <a href="#" class="w-fit font-bold py-3 px-5 rounded-full text-white bg-indigo-700">
                    Contact Admin
                </a>
                @endrole
            </div>
        </div>
    </div>
</x-app-layout>
