<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" x-data="{role_id: 2}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" x-model="role_id"  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="1">Admin</option>
                    <option value="2">Patient</option>
                    <option value="3">Medein</option>
                </select>
            </div>
            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="specialite_id" value="{{ __('Specialité:') }}" />
                <select name="specialite_id"  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" >
                    <option value="1">L'allergologie</option>
                    <option value="2">l'andrologie</option>
                    <option value="3">L'anesthésiologie</option>
                    <option value="4">la cardiologie</option>
                    <option value="5">La neurologie</option>
                    <option value="6">L'endocrinologie</option>
                    <option value="7">la gastro-entérologie</option>
                    <option value="8">la gériatrie</option>
                    <option value="9">la gynécologie</option>
                    <option value="10">L'hématologie</option>
                </select>
            </div>
            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="region_ville" value="{{ __('région/ville:') }}" />
                <select name="region_ville"  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" >
                    <option value="Tanger_Tetouan_AlHoceima">Tanger_Tétouan_AlHoceima</option>
                    <option value="Fes_Meknes">Fès-Meknès</option>
                    <option value="Rabat_Salé_Kénitra">Rabat-Salé-Kénitra</option>
                    <option value="Beni_Mellal_Khénifra">Béni Mellal-Khénifra</option>
                    <option value="Casablanca_Settat">Casablanca-Settat</option>
                    <option value="Marrakech_Safi">Marrakech-Safi</option>
                    <option value="Darâa_Tafilalet">Darâa-Tafilalet</option>
                    <option value="Souss_Massa">Souss-Massa</option>
                    <option value="Guelmim_Oued_Noun">Guelmim-Oued Noun</option>
                </select>
            </div>
            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="tarif" value="{{ __(' tarifs en DH') }}" />
                <x-jet-input id="tarif"  class="block mt-1 w-full" type="text" :value="old('tarif')" name="tarif" />
            </div>
            <div class="mt-4" >
                <x-jet-label for="phone" value="{{ __(' phone nember') }}" />
                <x-jet-input id="phone" required class="block mt-1 w-full" type="text" :value="old('phone')" name="phone" />
            </div>
            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="CIN" value="{{ __('CIN') }}" />
                <x-jet-input id="CIN"  class="block mt-1 w-full" type="text" name="CIN" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
