<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review, $product_id, $rate;
    public function mount($id)
    {
        $this->record = Product::findOrFail($id);
        $this->product_id = $this->record->id;
    }
    private function resetInput()
    {
        $this->subject = null;
        $this->review = null;
        $this->IP = null;
    }
    public function store()
    {
        \App\Models\Review::create([
            'product_id' => $this->product_id,
            'user_id' => Auth::id(),
            'IP'=>$_SERVER['REMOTE_ADDR'],
            'subject' => $this->subject,
            'review' => "$this->review",
            'status' => "New"
        ]);
        $this->resetInput();
    }
    public function render()
    {
        return view('livewire.review');
    }
}