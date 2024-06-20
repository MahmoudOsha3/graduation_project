@extends('layouts.website.app')

@section('title') Chatbot @endsection

@livewireStyles

<style>
.chat-container {
    width: 950px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(15, 44, 117, 0.1);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    margin-left: 250px ;
}

.chat-header {
    background-color: #0a0d67;
    color: white;
    padding: 15px;
    text-align: center;
}

.chat-box {
    flex: 1;
    padding: 15px;
    overflow-y: auto;
}

.chat-box .message {
    margin-bottom: 15px;
}

.chat-box .message.user {
    text-align: right;
}

.chat-box .message.bot {
    text-align: left;
}

.chat-box .message p {
    display: inline-block;
    padding: 10px;
    border-radius: 10px;
    max-width: 70%;
}

.chat-box .message.user p {
    background-color: #007bff;
    color: #fff;
}

.chat-box .message.bot p {
    background-color: #f1f1f1;
    color: #333;
}

.chat-input {
    display: flex;
    border-top: 1px solid #ddd;
}

.chat-input input {
    flex: 1;
    padding: 15px;
    border: none;
    outline: none;
}

.chat-input button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 15px 20px;
    cursor: pointer;
}

.chat-input button:hover {
    background-color: #575757;
}
</style>

@section('content')
{{-- appointment table --}}
<section class="blog_area single-post-area section-padding">
    <div class="whole-wrap">
        <livewire:chat-bot />
    </div>
</div>


<div class="center" style="margin-left: 30%">
    <form action="{{ route('chatbot.store') }}" method="POST">
        @csrf
        <label for="">input</label><br>
        <textarea name="input" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="">response</label><br>
        <textarea name="response" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send">
    </form>
</div>

</section>


@endsection

{{-- <script src="script.js"></script> --}}
