<div class="text-gray-800">
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                {{-- <a href="{{ route('home') }}">
                    <img src="{{ asset('/img/lg.png') }}" class="mb-4 h-56 md:h-72">
                </a> --}}
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form wire:submit.prevent="save">

                <div>
                    <x-jet-label for="name" value="{{ __('الأسم') }}" />
                    <x-jet-input wire:model="name"
                        class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    @error('name')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('البريد الألكتروني') }}" />
                    <x-jet-input wire:model="email"
                        class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                        type="email" name="email" :value="old('email')" required />
                    @error('email')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex mt-8 gap-x-2">
                    <div class=" w-full">
                        <x-jet-label for="gender" />

                        <select name="gender" id="gender" wire:model="gender" required
                            class="px-8 py-3 w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0 text-sm">
                            <option value="0">الجنس</option>
                            <option value="1">أنثى</option>
                            <option value="2">ذكر</option>
                        </select>
                    </div>

                </div>
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('كلمة السر') }}" />
                    <x-jet-input wire:model="password"
                        class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                        type="password" name="password" required autocomplete="new-password" />
                    @error('password')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('تأكيد كلمة السر') }}" />
                    <x-jet-input wire:model="password_confirmation"
                        class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                    @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                

                {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '"
                                    class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of
                                    Service') . '</a>',
                                'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '"
                                    class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy')
                                    . '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
                @endif --}}

                <div class="flex items-center justify-between mt-4">
                    <x-jet-button type="submit" class="ml-4">
                        {{ __('أنشاء') }}
                    </x-jet-button>

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('لديك حساب بالفعل ؟') }}
                    </a>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>
