<div class="space-y-3">
    <x-filament::button
        :href="route('auth.socialite.redirect', 'voidauth')"
        :spa-mode="false"
        tag="a"
        color="gray"
        class="w-full justify-center flex"
    >
    <span class="flex">
         <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">

        Continue with Voidauth
    </span>
    </x-filament::button>

    <div class="flex items-center justify-center my-4">
        <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
        <span class="mx-2 text-gray-500 dark:text-gray-400">or</span>
        <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
    </div>

</div>
