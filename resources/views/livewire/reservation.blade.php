<div class="relative px-4 py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-32 bg-gradient-to-r
                from-purple-500
                    to-blue-400">
    @if(session('status'))
        <div class="bg-green-100 my-5 border-l-4 border-green-500 w-1/2 rounded-xl shadow-md mx-auto mt-10 flex min-h-full flex-col justify-center px-6 py-12
    lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="text-center text-2xl leading-9 tracking-tight text-gray-700">Thanks to reservation🎉</h2>
                <p class="text-center  leading-9 tracking-tight text-gray-700">{{session('status')}}</p>
            </div>
        </div>
        @else
        <div class="bg-gray-50 w-1/2 rounded-xl shadow-md mx-auto mt-10 flex min-h-full flex-col justify-center px-6 py-12
    lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create a
                    Reservation</h2>
            </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form wire:submit="save" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Customer Name</label>
                        <div class="mt-2">
                            <input wire:model="name" id="name" name="name" type="text" autocomplete="name" required
                                   class="block
                        p-3 w-full rounded-md border-0  text-gray-900 shadow-sm sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                        <div class="mt-2">
                            <input wire:model="phone" id="phone" name="phone" type="text" autocomplete="phone" required
                                   class="block
                        p-3 w-full rounded-md border-0 text-gray-900 shadow-sm sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Type Of Service</label>
                        <select wire:model.live="service_id"
                                class="block mt-3
                        p-3 w-full rounded-md border-0 text-gray-900 shadow-sm sm:text-sm sm:leading-6"
                        >
                            <option value="" selected disabled>Select a Service...</option>
                            @foreach($service as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="checkIn" class="block text-sm font-medium leading-6 text-gray-900">Reservation
                            Date</label>
                        <div class="mt-2">
                            <input wire:model="checkIn" id="checkIn" name="checkIn" type="datetime-local"
                                   autocomplete="checkIn"
                                   required
                                   class="block
                        p-3 w-full rounded-md border-0 text-gray-900 shadow-sm sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5
                        text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500
                        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                        focus-visible:outline-indigo-600">Submit</button>
                    </div>
                </form>
            </div>
    </div>
        @endif
</div>
