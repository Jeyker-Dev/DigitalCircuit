<aside class="w-72 bg-sky-900 h-full fixed top-0 left-0 overflow-y-auto">
    <x-application-logo svgClass="text-gray-200" divClass="mt-2 p-2 mb-7" h1Class="md:text-xl lg:text-xl text-gray-200" />

    <!-- Text Side Bar Menu -->
    <x-text-side-bar>
        Menu
    </x-text-side-bar>

    <div class="w-10/12 mx-auto my-5 flex flex-col items-center gap-y-2">
        <!-- Button Dashboard -->
        <x-button-side-bar buttonClass="flex justify-start items-center" href="{{route('dashboard')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard mx-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
            </svg>
            Dashboard
        </x-button-side-bar>

        <!-- Button Calendar -->
        <x-button-side-bar buttonClass="flex justify-start items-center" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar mx-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                <path d="M16 3v4" />
                <path d="M8 3v4" />
                <path d="M4 11h16" />
                <path d="M11 15h1" />
                <path d="M12 15v3" />
            </svg>
            Calendar
        </x-button-side-bar>

        <!-- Button DropDown -->
        <x-ts-dropdown :personalize="[
            'wrapper.first' => [
                'append' => 'w-full',
                'replace' => [
                'items-start' => 'items-center'
                ],
            ],

            'wrapper.second' => [
                'append' => 'w-full'
            ],

            'width' => [
                'replace' => [
                'w-56' => 'w-full'
                ],
            ],
        ]">
            <x-slot:action>

            <!-- Button DropDown Tables -->
                <x-sidebar-dropdown x-on:click="show = !show" class="flex justify-start items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-align-box-bottom-right mx-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M11 15v2" />
                        <path d="M14 11v6" />
                        <path d="M17 13v4" />
                    </svg>

                    Tables

                    <svg :class="show ? 'rotate-360' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-arrow-badge-down text-gray-200 dark:text-gray-200 h-6 w-6 ml-24"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.375 6.22l-4.375 3.498l-4.375 -3.5a1 1 0 0 0 -1.625 .782v6a1 1 0 0 0 .375 .78l5 4a1 1 0 0 0 1.25 0l5 -4a1 1 0 0 0 .375 -.78v-6a1 1 0 0 0 -1.625 -.78z" /></svg>
                </x-sidebar-dropdown>
            </x-slot:action>

            <!-- Button Tables Products -->
            <x-ts-dropdown.items>
                <x-button-side-bar buttonClass="flex justify-start items-center" href="{{route('table.products')}}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-archive mx-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" /><path d="M10 12l4 0" /></svg>
                    </svg>
                    Products
                </x-button-side-bar>
            </x-ts-dropdown.items>

            <!-- Button Tables Categories -->
            <x-ts-dropdown.items separator>
                <x-button-side-bar buttonClass="flex justify-start items-center" href="{{route('table.categories')}}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-category mx-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                    </svg>
                    Categories
                </x-button-side-bar>
            </x-ts-dropdown.items>
        </x-ts-dropdown>
    </div>

    <!-- Text Side Bar Business -->
    <x-text-side-bar>
        Business
    </x-text-side-bar>

    <div class="w-10/12 mx-auto my-5 flex flex-col items-center gap-y-2">
        <!-- Button DropDown -->
        <x-ts-dropdown :personalize="[
            'wrapper.first' => [
                'append' => 'w-full',
                'replace' => [
                'items-start' => 'items-center'
                ],
            ],

            'wrapper.second' => [
                'append' => 'w-full'
            ],

            'width' => [
                'replace' => [
                'w-56' => 'w-full'
                ],
            ],
        ]">
            <x-slot:action>

            <!-- Button DropDown Menu -->
                <x-sidebar-dropdown x-on:click="show = !show" class="flex justify-start items-center">

                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-layout-navbar-expand mx-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 18v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M4 9h16" /><path d="M10 14l2 2l2 -2" /></svg>

                    Menu

                    <svg :class="show ? 'rotate-360' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-arrow-badge-down text-gray-200 dark:text-gray-200 h-6 w-6 ml-24"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.375 6.22l-4.375 3.498l-4.375 -3.5a1 1 0 0 0 -1.625 .782v6a1 1 0 0 0 .375 .78l5 4a1 1 0 0 0 1.25 0l5 -4a1 1 0 0 0 .375 -.78v-6a1 1 0 0 0 -1.625 -.78z" /></svg>
                </x-sidebar-dropdown>
            </x-slot:action>

            <!-- Button DropDown Products -->
            <x-ts-dropdown.items>
                <!-- Button Products -->
                <x-button-side-bar buttonClass="flex justify-start items-center" href="{{route('products.create')}}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-script mx-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 20h-11a3 3 0 0 1 0 -6h11a3 3 0 0 0 0 6h1a3 3 0 0 0 3 -3v-11a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v8" /></svg>
                    Products
                </x-button-side-bar>
            </x-ts-dropdown.items>

            <!-- Button DropDown Categories -->
            <x-ts-dropdown.items separator>
                <x-button-side-bar buttonClass="flex justify-start items-center" href="{{route('categories.create')}}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-category mx-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                    Categories
                </x-button-side-bar>
            </x-ts-dropdown.items>

            <!-- Button DropDown Brands -->
            <x-ts-dropdown.items separator>
                <x-button-side-bar buttonClass="flex justify-start items-center" href="{{route('brands.create')}}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-metabrainz mx-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7v10l7 4v-18z" /><path d="M21 7v10l-7 4v-18z" /></svg>
                    Brands
                </x-button-side-bar>
            </x-ts-dropdown.items>
        </x-ts-dropdown>
    </div>
</aside>