<div wire:poll.keep-alive class="col-md-3" style="width: 90%;">
    <!-- DIRECT CHAT PRIMARY -->
    <div class="box box-primary direct-chat direct-chat-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><img style="border-radius: 50%;width:40px;height:40px" src="{{ asset('images/'."$user->image") }}" alt="img"> {{ $user->name}}</h3>

        <div class="box-tools pull-right">
        </div>
      </div>
      <!-- /.box-header -->
        <div class="chat-box">
                @forelse ($messages as $msg)
                    <div class="message {{ $msg['created_by'] == 'user' ? 'user' : 'doctor' }}">
                        @php $image_user = $msg->user->image ; $image_doctor = $msg->doctor->image @endphp
                        <img style="border-radius: 50% ;width:50px;height:50px" src="{{ $msg['created_by'] == 'user' ? asset('images/'."$image_user") : asset('images/'."$image_doctor") }}" alt="User Image">
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
      <!-- /.box-body -->
      <div class="box-footer">
          <div class="input-group">
            <input type="text" wire:model.defer="message_text" placeholder="Type Message ..." class="form-control">
            <span class="input-group-btn">
                <button wire:click="sendMessage" class="btn btn-primary btn-flat">Send</button>
            </span>
          </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!--/.direct-chat -->
</div>
<!-- /.col -->
