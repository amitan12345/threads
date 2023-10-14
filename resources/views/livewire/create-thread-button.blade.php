<div>
    <button data-model-target="createThreadModal" data-modal-toggle="createThreadModal" class="rounded-full w-16 h-16 bg-blue-600 fixed bottom-5 right-5 flex justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>
    </button>
    
    <div id="createThreadModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg flex justify-center items-center h-[80vh]">
                <form wire:submit="createThread">
                    <input class="bg-gray-200 rounded w-5/6" type="text" placeholder="Thread Name" wire:model="threadName">
                    <textarea class="bg-gray-200 rounded w-5/6 h-32" placeholder="Type a description..." wire:model="description"></textarea>
                    <input data-modal-hide="createThreadModal" type="submit" value="Create Thread" class="bg-gray-400 rounded-lg">
                </form>
            </div>
        </div>
    </div>
</div>
