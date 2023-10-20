<div class="h-[70vh] w-full">
    <div class="flex flex-row">
        <div wire:click="activateThread" class="w-24 border-t-2 border-l-2 border-r-2 border-black bg-gray-100 hover:bg-gray-300 text-center mx-2">Threads</div>
        <div wire:click="activateTweet" class="w-24 border-t-2 border-l-2 border-r-2 border-black bg-gray-100 hover:bg-gray-300 text-center mx-2">Tweets</div>
    </div>
    <div class="w-full h-full bg-gray-100 overflow-auto border-2 border-black">
        <div class="{{ $isThreadActive ? '' : 'hidden' }}">
            <livewire:user-thread-list :userId="$userId" />
        </div>
        <div class="{{ $isTweetActive ? '' : 'hidden' }}">
            <livewire:user-tweet-list :userId="$userId" />
        </div>
    </div>
</div>
