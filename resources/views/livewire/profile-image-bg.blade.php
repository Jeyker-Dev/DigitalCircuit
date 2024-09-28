<div x-data>
    <input type="file" id="backgroundImage" wire:model="backgroundimage" class="hidden" wire:click="$dispatch('updateImageBg')">

    <button type="button" @click="document.getElementById('backgroundImage').click()"
            class="font-bold bg-sky-500 dark:bg-sky-620 hover:bg-sky-510 dark:hover:bg-sky-600">
        Edit
    </button>
</div>