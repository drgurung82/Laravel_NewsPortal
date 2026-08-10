@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<div class="container mx-auto py-12">

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8">

        <h1 class="text-3xl font-bold mb-6">
            Contact Us
        </h1>

        @if(session('success'))

            <div class="bg-green-100 text-green-700 p-4 rounded mb-5">
                {{ session('success') }}
            </div>

        @endif

        <form action="{{ route('contact.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label>Name</label>

                <input
                    type="text"
                    name="name"
                    class="w-full border rounded-lg p-3"
                    value="{{ old('name') }}">
            </div>

            <div class="mb-4">
                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    class="w-full border rounded-lg p-3"
                    value="{{ old('email') }}">
            </div>

            <div class="mb-4">
                <label>Phone</label>

                <input
                    type="text"
                    name="phone"
                    class="w-full border rounded-lg p-3"
                    value="{{ old('phone') }}">
            </div>

            <div class="mb-4">
                <label>Subject</label>

                <input
                    type="text"
                    name="subject"
                    class="w-full border rounded-lg p-3"
                    value="{{ old('subject') }}">
            </div>

            <div class="mb-6">
                <label>Message</label>

                <textarea
                    name="message"
                    rows="6"
                    class="w-full border rounded-lg p-3">{{ old('message') }}</textarea>
            </div>

            <button
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">

                Send Message

            </button>

        </form>

    </div>

</div>

@endsection
