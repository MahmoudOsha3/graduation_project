<div class="chat-container" wire:poll.keep-alive>
    <div class="chat-header">
        <img src="{{ asset('images/'."$doctor->image") }}" alt="Doctor Image">
        <h2>Dr {{ $doctor->name }}</h2>
    </div>
    <div class="chat-box">
        @forelse ($messages as $msg)
            <div class="message {{ $msg['created_by'] == 'user' ? 'user' : 'doctor' }}">
                @php $image_user = $msg->user->image ; $image_doctor = $msg->doctor->image @endphp
                <img src="{{ $msg['created_by'] == 'user' ? asset('images/'."$image_user") : asset('images/'."$image_doctor") }}" alt="User Image">
                <div>
                    {{-- <span style="">{{ $msg->created_at->diffForHumans() }}</span> --}}
                    <p>{{ $msg->message_text }}</p>
                    <div class="timestamp">{{ $msg->created_at->diffForHumans() }}</div>
                </div>
            </div>
        @empty
            <div><p>No message found</p></div>
        @endforelse
    </div>

    <div class="chat-input">
        {{-- <form wire:submit.prevent="sendMessage"> --}}
            <input type="text" wire:model.defer="message_text" onkeydown="scrollDown()" placeholder="اكتب رسالتك هنا...">
            <button wire:click="sendMessage">@lang('site.send')</button>
        {{-- </form> --}}
    </div>
</div>
</div>


