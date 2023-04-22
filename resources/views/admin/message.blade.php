@extends('admin.layout')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Message Response</h1>

        <div class="mb-6">
            <label class="block font-bold mb-2" for="email">To:</label>
            <input class="w-full p-2 border rounded-lg" type="text" id="email" name="email" value="{{ $message->email }}" readonly>
        </div>

        <div class="mb-6">
            <label class="block font-bold mb-2" for="message">Message:</label>
            <div class="border p-2 rounded-lg">
                {{ $message->message }}
            </div>
        </div>

        <div class="mb-6">
            <label class="block font-bold mb-2" for="response">Response:</label>
            <textarea class="w-full p-2 border rounded-lg" id="response" name="response" rows="5"></textarea>
        </div>

        <div class="text-right">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Send</button>
        </div>
    </div>
</div>
@endsection