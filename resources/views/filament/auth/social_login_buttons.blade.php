<div class="space-y-3">
    <x-filament::button
        :href="route('auth.socialite.redirect', 'oidc')"
        :spa-mode="false"
        tag="a"
        color="gray"
        class="w-full justify-center flex"
    >
    <span class="flex">
         <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
            <path d="M10 11V8L15 12L10 16V13H1V11H10ZM2.4578 15H4.58152C5.76829 17.9318 8.64262 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C8.64262 4 5.76829 6.06817 4.58152 9H2.4578C3.73207 4.94289 7.52236 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C7.52236 22 3.73207 19.0571 2.4578 15Z"></path>
         </svg>
        Continue with Voidauth
    </span>
    </x-filament::button>

    <div class="flex items-center justify-center my-4">
        <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
        <span class="mx-2 text-gray-500 dark:text-gray-400">or</span>
        <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
    </div>

</div>
