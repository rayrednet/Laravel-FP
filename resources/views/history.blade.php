<x-layout>
    <section class="py-20 relative">
        <div class="w-full max-w-7xl mx-auto px-4 md:px-8">
            <div class="max-w-screen-xl mb-2 lg:mb-6">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-green-900 text-left">Order History</h2>
            </div>

            <!-- Order History Card -->
            <div class="border border-gray-200 rounded-lg shadow-md pt-4">
                <div class="flex justify-between items-center px-3 md:px-11">
                    <div>
                        <p class="font-medium text-md leading-8 text-black whitespace-nowrap">
                            Order Number : <span class="text-green-600">#10234987</span>
                        </p>
                        <p class="font-medium text-md leading-8 text-black whitespace-nowrap">
                            Order Date : <span class="text-green-600">18th March 2021</span>
                        </p>
                    </div>
                    <div class="text-right">
                        <p class="font-normal text-md text-gray-500">Status</p>
                        <p class="font-semibold text-lg text-green-500">Completed</p>
                    </div>
                </div>
                <hr class="my-4 w-full border-t border-gray-300" />

                <!-- Product Section -->
                <div class="px-3 md:px-11">
                    <div class="grid grid-cols-12 gap-6 items-start">
                        <div class="col-span-12 sm:col-span-2">
                            <img src="https://pagedone.io/asset/uploads/1705474774.png" alt="Decoration Flower port" class="w-full object-cover rounded-md">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <h6 class="font-semibold text-lg text-black mb-1">Decoration Flower port</h6>
                            <p class="text-sm text-gray-500 mb-1">Chef: Dust Studios</p>
                            <p class="text-sm text-gray-500">Qty: 1</p>
                        </div>
                        <div class="col-span-12 sm:col-span-4 text-right">
                            <p class="font-semibold text-lg text-black">$80.00</p>
                        </div>
                    </div>
                </div>
                <hr class="my-4 w-full border-t border-gray-300" />

                <div class="px-3 md:px-11">
                    <div class="grid grid-cols-12 gap-6 items-start">
                        <div class="col-span-12 sm:col-span-2">
                            <img src="https://pagedone.io/asset/uploads/1705474774.png" alt="Decoration Flower port" class="w-full object-cover rounded-md">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <h6 class="font-semibold text-lg text-black mb-1">Decoration Flower port</h6>
                            <p class="text-sm text-gray-500 mb-1">Chef: Dust Studios</p>
                            <p class="text-sm text-gray-500">Qty: 1</p>
                        </div>
                        <div class="col-span-12 sm:col-span-4 text-right">
                            <p class="font-semibold text-lg text-black">$80.00</p>
                        </div>
                    </div>
                </div>
                <hr class="my-4 w-full border-t border-gray-300" />

                <div class="px-3 pb-4 md:px-8 text-right">
                    <p class="font-medium text-md text-gray-700">Total Price: <span class="text-black">$200.00</span></p>
                </div>
            </div>
        </div>
    </section>
</x-layout>