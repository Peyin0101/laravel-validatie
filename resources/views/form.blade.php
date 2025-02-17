<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulier verwerking</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script></script>
</head>

<body>



    <form  novalidate action="{{ route('contact.handle') }}" method="POST" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded">
        @csrf

        @if(session('success'))
        <div class="max-w-lg mx-auto p-4 mb-6 bg-green-100 text-green-700 border border-green-400 rounded">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input value="{{ old('name') }}" type="text" id="name" name="name"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @error('name')
            <p class="text-red-500 text-xs mt-1">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email Address</label>
            <input value="{{ old('email') }}" type="email" id="email" name="email"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @error('email')
            <p class="text-red-500 text-xs mt-1">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="department" class="block text-gray-700">Company Department</label>
            <select id="department" name="department" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                required>
                <option @selected(!old('department')) disabled>Select a department</option>
                <option value="sales" @selected(old('department') == "sales")>Sales</option>
                <option value="support" @selected(old('department') == "support")>Support</option>
                <option value="marketing" @selected(old('department') == "marketing")>Marketing</option>
            </select>
            @error('department')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700">Message</label>
            <textarea id="message" name="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                required>{{ old('message') }} </textarea>
                @error('message')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="inline-flex items-center">
                <input @checked(old('cookie_policy')) type="checkbox" name="cookie_policy" class="form-checkbox" required>
                <span class="ml-2">I accept the cookie policy</span>
            </label>
            @error('cookie_policy')
            <p class="text-red-500 text-xs mt-1">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="mb-4">
            <button type="submit"
                class="transition-colors w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700">Submit</button>
        </div>
    </form>


</body>

</html>
