<!-- LIST REVIEW -->
<div>
    <!-- ADD REVIEW -->

    <!-- http/livewire/review/store function -->
    <form class="w-full" wire:submit.prevent="store">
        <h5 class="mtext-108 cl2 p-b-7">
            Add a review
        </h5>
        <div class="flex-w flex-m p-t-50 p-b-23">
                                 <span class="stext-102 cl3 m-r-16">
                                 Your Rating
                                 </span>
            <span class="wrap-rating fs-18 cl11 pointer">
                                 <i class="item-rating pointer zmdi zmdi-star-outline" wire:model="rate"></i>
                                 <i class="item-rating pointer zmdi zmdi-star-outline" wire:model="rate"></i>
                                 <i class="item-rating pointer zmdi zmdi-star-outline" wire:model="rate"></i>
                                 <i class="item-rating pointer zmdi zmdi-star-outline" wire:model="rate"></i>
                                 <i class="item-rating pointer zmdi zmdi-star-outline" wire:model="rate"></i>
                                 <input class="dis-none" type="number" name="rating">
                                 </span>
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="subject">Subject</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20"
                   type="text" wire:model="subject">

        </div>

        <div class="row p-b-25">
            <div class="col-12 p-b-5">
                <label class="stext-102 cl3" for="review">Your review</label>
                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10"
                          wire:model="review"    ></textarea>

            </div>
        </div>
        @auth
        <button type="submit"
            class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
            Submit
        </button>
        @else
        <button href="/login" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
            Login For Submit
        </button>
        @endauth
    </form>
</div>
