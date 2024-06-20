<div class="chat-container">
    <div class="chat-header">
        <h2 style="color: white">@lang('site.doctor-ai')</h2>
    </div>
    <div class="chat-box">
        @foreach($messages as $msg)
            <div class="message {{ $msg['user'] ? 'user' : 'bot' }}">
                <p>{{ $msg['message'] }}</p>
            </div>
        @endforeach
    </div>
    <div class="chat-input">
        <input type="text" wire:model="message" wire:keydown.enter="sendMessage" placeholder="اكتب رسالتك هنا...">
        <button wire:click="sendMessage">@lang('site.send')</button>
    </div>
</div>
