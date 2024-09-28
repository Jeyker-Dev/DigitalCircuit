<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileImageBg extends Component
{
    public $backgroundimage;
    use WithFileUploads;

    #[On('updateImageBg')]
    public function updateImageBg()
    {
        $this->validate([
            "backgroundimage" => "image|max:2048"
        ]);

        $imageName = time() . '.' . $this->backgroundimage->extension();
        $this->backgroundimage->storeAs('public/profileimagebg', $imageName);

        $imageUrl = asset('storage/profileimagebg/' . $imageName);
        session(['background_image_url' => $imageUrl]);

        $this->dispatch("backgroundImageUpdated", $imageUrl);
    }   // Here End Function

    public function render()
    {
        return view('livewire.profile-image-bg');
    }   // Here End Function
}   // Here End Class
