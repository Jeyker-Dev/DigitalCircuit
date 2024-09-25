<x-admin-layout>
    <!--    Subtitle Profile -->
    <x-subtitle :value="__('Profile')" />

    <!--    Image Background -->
    <div class="w-full h-40 object-cover object-center bg-[url('/img/imagesbackgroundramdom.jpeg')]">
        <x-ts-button text="Edit" icon="camera" position="left" class="font-bold bg-sky-500 dark:bg-sky-620 hover:bg-sky-510 dark:hover:bg-sky-600" />
    </div>
</x-admin-layout>
