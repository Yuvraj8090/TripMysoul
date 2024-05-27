<div class="md:grid md:grid-cols-3 md:gap-6">


    <div class="mt-5 md:mt-0 md:col-span-2">
        <form>
            <div class="bg-white shadow sm:rounded-md">
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <!-- Package Name -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="package_name" class="block text-sm font-medium text-gray-700">Package
                                Name</label>
                            <input type="text" name="package_name" id="package_name" wire:model="package_name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Customer Name -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="cust_name" class="block text-sm font-medium text-gray-700">Customer Name</label>
                            <input type="text" name="cust_name" id="cust_name" wire:model="cust_name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Customer Number -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="cust_num" class="block text-sm font-medium text-gray-700">Customer
                                Number</label>
                            <input type="text" name="cust_num" id="cust_num" wire:model="cust_num"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Customer Email -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="cust_email" class="block text-sm font-medium text-gray-700">Customer
                                Email</label>
                            <input type="email" name="cust_email" id="cust_email" wire:model="cust_email"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Customer Members -->
                       

                        <!-- Trip Start -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="trip_start" class="block text-sm font-medium text-gray-700">Trip Start
                                Date</label>
                            <input type="date" name="trip_start" id="trip_start" wire:model="trip_start"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Days -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="days" class="block text-sm font-medium text-gray-700">Number of Days</label>
                            <input type="number" name="days" id="days" wire:model="days"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Trip End -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="trip_end" class="block text-sm font-medium text-gray-700">Trip End Date</label>
                            <input type="date" name="trip_end" id="trip_end" wire:model="trip_end"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Total Amount -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="total_amount" class="block text-sm font-medium text-gray-700">Total
                                Amount</label>
                            <input type="number" name="total_amount" id="total_amount" wire:model="total_amount"
                                step="0.01"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Deposited Amount -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="deposited_amount" class="block text-sm font-medium text-gray-700">Deposited
                                Amount</label>
                            <input type="number" name="deposited_amount" id="deposited_amount"
                                wire:model="deposited_amount" step="0.01"
                                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Status -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" wire:model="status"
                                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <option value="pending">Pending</option>
                                <option value="confirmed">Confirmed</option>
                                <option value="canceled">Canceled</option>
                            </select>
                        </div>
                    </div>
                </div>

                @if (isset($actions))
                <div
                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
                @endif
        </form>
    </div>
</div>