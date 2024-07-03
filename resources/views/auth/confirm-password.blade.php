<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        This is a secure area of the application. Please confirm your password before continuing.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label for="password" >Password</label>

            <input id="password" class="block mt-1 w-full" type="password" name="password" required />

            @error('password')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>  
            @enderror
        </div>

        <div class="flex justify-end mt-4">
            <button class="bg-gray-500 ms-4 p-2 text-white">
                Confirm
            </button>
        </div>
    </form>
</x-guest-layout>
