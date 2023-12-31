<div>
    <div class="flex w-full flex-row bg-blue-950">
        <div class="w-1/3 flex flex-row">
            <a href="/dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <div class="text-white bold ml-1">Threadder</div>
        </div>
        <div class="w-1/3">
            <div class="bg-blue-100">
                <div class="flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input type="text" placeholder="Search User..." class="bg-blue-100 w-full z-20" wire:click='showUserList' wire:model.live="otherUserName">
                </div>
            </div>
        </div>
        <div class="w-1/3 flex flex-row-reverse">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
            </svg>
            <div class="text-white h-6 overflow-hidden">{{ $userName }}</div>
        </div>
    </div>

    <div class="fixed top-6 left-1/4 w-1/2 bg-white h-60 border-2 border-black overflow-auto z-20 @if(!$isUserListVisible) hidden @endif"">
        @foreach($users as $user)
            <a href="/dashboard/{{ $user->id }}">
                <div class="w-full h-16 border-b-2 border-black bg-green-200 hover:bg-green-400">
                    <div>{{ $user->id }}</div>
                    <div>{{ $user->name }}</div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="fixed top-0 left-0 w-screen h-screen z-10 @if(!$isUserListVisible) hidden @endif" wire:click='hideUserList'></div>
</div>
