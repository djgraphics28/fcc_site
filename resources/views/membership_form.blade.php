<x-guest-layout>
    <h1 class="text-center text-lg"><strong>FCC Membership Form</strong></h1>
    <form method="POST" action="{{ route('registration.store') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="firstName" :value="__('First Name')" />
            <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')"
                required autofocus autocomplete="firstName" />
            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="middleName" :value="__('Middle Name (optional)')" />
            <x-text-input id="middleName" class="block mt-1 w-full" type="text" name="middleName" :value="old('middleName')"
                autocomplete="middleName" />
            <x-input-error :messages="$errors->get('middleName')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="lastName" :value="__('Last Name')" />
            <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')"
                required autofocus autocomplete="lastName" />
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="extName" :value="__('Extension Name (ex. JR, SR, III) (optional)')" />
            <x-text-input id="extName" class="block mt-1 w-full" type="text" name="extName" :value="old('extName')"
                autocomplete="extName" />
            <x-input-error :messages="$errors->get('extName')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <x-select-input id="gender" name="gender" :options="$genders" :value="old('gender')" required
                :selected="$selectedGender" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Birth Date -->
        <div class="mt-4">
            <x-input-label for="birthDate" :value="__('Birth Date')" />
            <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="old('birthDate')"
                required autofocus autocomplete="birthDate" />
            <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
        </div>

        <!-- Contact Number -->
        <div class="mt-4">
            <x-input-label for="contactNumber" :value="__('Contact Number (optional)')" />
            <x-text-input type="number" id="contactNumber" class="block mt-1 w-full" name="contactNumber"
                :value="old('contactNumber')" autocomplete="contactNumber" />
            <x-input-error :messages="$errors->get('contactNumber')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address (optional)')" />
            <x-textarea-input type="text" id="address" class="block mt-1 w-full" name="address"
                :value="old('address')" autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input-email id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Date Baptized -->
        <div class="mt-4">
            <x-input-label for="dateBaptized" :value="__('If Baptized, When? (optional)')" />
            <x-text-input id="dateBaptized" class="block mt-1 w-full" type="date" name="dateBaptized"
                :value="old('dateBaptized')" autofocus autocomplete="dateBaptized" />
            <x-input-error :messages="$errors->get('dateBaptized')" class="mt-2" />
        </div>

        <!-- Groups -->
        {{-- <div class="mt-4">
            <x-input-label for="group" :value="__('What group(s) do you belong?') " />
            <x-select-multiple id="groups[]" name="group" :options="$groups" :value="old('groups[]')" :selected="[]" />
            <x-input-error :messages="$errors->get('groups[]')" class="mt-2" />
        </div> --}}


        <div class="flex items-center justify-center mt-4">

            <x-primary-button>
                {{ __('Submit Registration') }}
            </x-primaryy-button>
        </div>
    </form>
</x-guest-layout>
