<div>
    <nav
            class="w-full bg-white bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
        <ul class="md:flex items-center">
            <x-home.nav-link :active="request()->routeIs('home')" href="{{route('home')}}">
                Home
            </x-home.nav-link>
            <x-home.nav-link :active="request()->routeIs('service')" href="{{route('service')}}">
                Service
            </x-home.nav-link>
            <x-home.nav-link :active="request()->routeIs('contact')" href="{{route('contact')}}">
                Contact
            </x-home.nav-link>
                <x-home.nav-link class=" hover:rounded-xl
                        hover:text-teal-500 inline-block font-semibold px-4 py-2 text-white bg-blue-600
                        md:bg-transparent
                            md:text-white border border-white rounded" :active="request()->routeIs('reservation')"
                                 href="{{route('reservation')}}">
                    Reservation
                </x-home.nav-link>
        </ul>
    </nav>
</div>