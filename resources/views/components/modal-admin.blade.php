<div>
    <!-- You can open the modal using ID.showModal() method -->
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            @if ($selectedProduct)
                <h3 class="text-lg font-bold">{{ $selectedProduct->name }}</h3>
                <img src="{{ asset('uploads/' . $selectedProduct->image) }}" alt="Imagen {{ $selectedProduct->name }}" class="py-4" />
                <p class="py-4">{{ $selectedProduct->description }}</p>
                <p class="py-4">Price: ${{ $selectedProduct->price }}</p>
            @else
                <h3 class="text-lg font-bold">No product selected</h3>
            @endif
        </div>
    </dialog>
</div>