<div class="leftsec">
    <span class="search_by">This {{ ucfirst($filterVal) }}</span>
    <div class="arrow_box">
        <span wire:click='handlePrevBtn' class="arrow"><img src="{{ asset('assets/images/my-calender/icon_lft_arrow.svg') }}"
                alt="icon arrow left" /></span>
        <span wire:click='handleNextBtn' class="arrow"><img src="{{ asset('assets/images/my-calender/icon_rgt_arrow.svg') }}"
                alt="icon arrow rgt" /></span>
    </div>
    <div class="date">{{ $label }}</div>
</div>