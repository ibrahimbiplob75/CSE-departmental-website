<x-guest-layout>
    <p2 style="font-size: 30px;color: white;padding-left: 60px;">Student registration</p2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-5">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>



        <div class="mt-4">
            <x-input-label for="class_id" :value="__('class ID')" />
            <x-text-input id="class_id" class="block mt-1 w-full" type="text" name="class_id" />
            <x-text-input  class="block mt-1 w-full" type="hidden" name="category" value="admin" />
            <x-input-error :messages="$errors->get('class_id')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="batch_no" :value="__('Batch No')" />
                <select name="batch_no" style="background: #1a202c;color: #e5e7eb" class="block mt-1 w-full" >
                <option value="1" class="block mt-1 w-full">1st Batch</option>
                <option value="2" class="block mt-1 w-full">2nd Batch</option>
                <option value="3" class="block mt-1 w-full">3rd Batch</option>
                <option value="4" class="block mt-1 w-full">4th Batch</option>
            </select>
            <x-input-error :messages="$errors->get('batch_no')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="phone_no" :value="__('phone_no')" />
            <x-text-input id="phone_no" class="block mt-1 w-full" type="text" name="phone_no" />
            <x-input-error :messages="$errors->get('phone_no')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="form-check mt-4">
            <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                <span style="font-size: 20px;color: white;">Male</span>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                <span style="font-size: 20px;color: white;">Female</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
