@props(['imgClass' => '', 'svgClass' => ""])

<div x-data="{ open: false }">
    <div class="flex items-center mr-8" role="button" @click="open = !open">
        <span class="text-sm font-bold font-open-sans text-gray-600 dark:text-gray-200 mx-2">
            {{ auth()->user()->name}}
        </span>
    
        <img src="{{ asset("img/icon-7797704_1280.png") }}" alt="Imagen Perfil" class="w-12 h-12 object-cover rounded-full {{$imgClass}}">

        <div>
            <svg :class="open ? 'rotate-360' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  class="icon icon-tabler icons-tabler-filled icon-tabler-arrow-badge-down text-gray-800 dark:text-gray-200 h-6 w-6 {{$svgClass}}"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.375 6.22l-4.375 3.498l-4.375 -3.5a1 1 0 0 0 -1.625 .782v6a1 1 0 0 0 .375 .78l5 4a1 1 0 0 0 1.25 0l5 -4a1 1 0 0 0 .375 -.78v-6a1 1 0 0 0 -1.625 -.78z" /></svg>
        </div>
    </div>


        <div x-show="open" @click.away="open = false" class="dropdown-profile bg-base-100 rounded-box z-[1] shadow bg-white dark:bg-sky-900 border border-sky-600 w-52 h-52 mr-4 flex flex-col">

            <a href="#" class="text-gray-800 dark:text-gray-200 hover:text-sky-400 transition duration-500 ease-in-out w-8/12 p-2 ml-2 my-1">
                    <div class="flex items-center">
                        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-user w-6 h-6"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" /><path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" /></svg>
                        <span class="text-base font-open-sans font-medium ml-3">
                            My Profile
                        </span>
                    </div>
                </a>

                <a href="#" class="text-gray-800 dark:text-gray-200 text-lg font-open-sans font-medium hover:text-sky-400 transition duration-500 ease-in-out w-8/12 p-2 ml-2">
                    <div class="flex items-center">
                        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-settings w-6 h-6"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.647 4.081a.724 .724 0 0 0 1.08 .448c2.439 -1.485 5.23 1.305 3.745 3.744a.724 .724 0 0 0 .447 1.08c2.775 .673 2.775 4.62 0 5.294a.724 .724 0 0 0 -.448 1.08c1.485 2.439 -1.305 5.23 -3.744 3.745a.724 .724 0 0 0 -1.08 .447c-.673 2.775 -4.62 2.775 -5.294 0a.724 .724 0 0 0 -1.08 -.448c-2.439 1.485 -5.23 -1.305 -3.745 -3.744a.724 .724 0 0 0 -.447 -1.08c-2.775 -.673 -2.775 -4.62 0 -5.294a.724 .724 0 0 0 .448 -1.08c-1.485 -2.439 1.305 -5.23 3.744 -3.745a.722 .722 0 0 0 1.08 -.447c.673 -2.775 4.62 -2.775 5.294 0zm-2.647 4.919a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" /></svg>
                        <span class="text-base font-open-sans font-medium ml-3">
                            Settings
                        </span>
                    </div>
                </a>

                <div class="mt-14 border-t-[1px] border-sky-600 w-full">
                    <a href="{{ route("logout") }}" class="text-gray-800 dark:text-gray-200 text-lg font-open-sans font-medium hover:text-sky-400 transition duration-500 ease-in-out w-8/12 p-2">
                        <div class="flex items-center ml-3">
                            <svg  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2 w-6 h-6"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M15 12h-12l3 -3" /><path d="M6 15l-3 -3" /></svg>
                            <span class="text-base font-open-sans font-medium ml-3">
                                Log Out
                            </span>
                        </div>
                    </a>
                </div>
        </div>
</div>