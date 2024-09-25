<x-admin-layout>
    <!--    Subtitle Profile -->
    <x-subtitle :value="__('Profile')" />

    <div>
            <!--    Image Background -->
        <div class="relative object-cover object-center w-full h-44" style="background-image: url('/img/imagesbackgroundramdom.jpeg')">
            <x-ts-button text="Edit" icon="camera" position="left" class="absolute bottom-0 mb-4 font-bold right-10 bg-sky-500 dark:bg-sky-620 hover:bg-sky-510 dark:hover:bg-sky-600" />
        </div>
            <!--    Here End Image Background -->

            <!--    Image Profile   -->
            <div class="absolute z-10 flex items-center justify-center rounded-full top-72 right-96 w-44 h-44 bg-sky-500 dark:bg-sky-620">
                <img src="{{asset('img/blank-profile-picture-973460_1280.webp')}}" alt="Image Profile" class="z-20 object-cover object-center w-40 h-40 rounded-full">
            </div>
            <x-ts-button.circle icon="camera" class="absolute z-30 right-96 top-96" />
            <!--    Here End Image Profile   -->
    </div>

    <h3 class="text-3xl font-normal text-center text-gray-800 mt-36 font-average-sans dark:text-gray-200">
        My Name Is
    </h3>

    <div class="grid w-6/12 grid-cols-3 p-2 mx-auto mt-8 rounded-lg bg-sky-500 dark:bg-sky-620 bg-opacity-10 backdrop-filter backdrop-blur-lg">
        <div class="flex items-center w-10/12 gap-2 ml-4 border-r-2 border-sky-210 dark:border-sky-630">
            <span class="text-lg font-normal text-gray-800 font-open-sans dark:text-gray-200">250</span>
            <p class="text-sm font-semibold text-gray-800 dark:text-gray-200 font-open-sans">Products</p>
        </div>

        <div class="flex items-center w-10/12 gap-2 ml-4 border-r-2 border-sky-210 dark:border-sky-630">
            <span class="text-lg font-normal text-gray-800 font-open-sans dark:text-gray-200">250</span>
            <p class="text-sm font-semibold text-gray-800 dark:text-gray-200 font-open-sans">Products</p>
        </div>

        <div class="flex items-center w-10/12 gap-2 ml-4">
            <span class="text-lg font-normal text-gray-800 font-open-sans dark:text-gray-200">250</span>
            <p class="text-sm font-semibold text-gray-800 dark:text-gray-200 font-open-sans">Products</p>
        </div>
    </div>
</x-admin-layout>
