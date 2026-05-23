<form wire:submit="submit" class="rounded-lg border border-slate-900/10 bg-stone-50 p-5 shadow-sm dark:border-white/10 dark:bg-slate-900">
    @if ($sent)
        <div class="mb-4 rounded-md border border-teal-500/30 bg-teal-50 px-4 py-3 text-sm font-semibold text-teal-800 dark:bg-teal-950/50 dark:text-teal-200">
            Thanks. Your message was received.
        </div>
    @endif

    <div class="grid gap-4 sm:grid-cols-2">
        <div>
            <label for="contact-name" class="text-sm font-semibold">Name</label>
            <input id="contact-name" wire:model="name" type="text" class="mt-2 w-full rounded-md border border-slate-900/10 bg-white px-4 py-3 outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/15 dark:border-white/10 dark:bg-slate-950" autocomplete="name">
            @error('name') <p class="mt-2 text-sm text-red-600 dark:text-red-300">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="contact-email" class="text-sm font-semibold">Email</label>
            <input id="contact-email" wire:model="email" type="email" class="mt-2 w-full rounded-md border border-slate-900/10 bg-white px-4 py-3 outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/15 dark:border-white/10 dark:bg-slate-950" autocomplete="email">
            @error('email') <p class="mt-2 text-sm text-red-600 dark:text-red-300">{{ $message }}</p> @enderror
        </div>
    </div>

    <div class="mt-4">
        <label for="contact-message" class="text-sm font-semibold">Message</label>
        <textarea id="contact-message" wire:model="message" rows="5" class="mt-2 w-full resize-y rounded-md border border-slate-900/10 bg-white px-4 py-3 outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/15 dark:border-white/10 dark:bg-slate-950"></textarea>
        @error('message') <p class="mt-2 text-sm text-red-600 dark:text-red-300">{{ $message }}</p> @enderror
    </div>

    <button type="submit" class="mt-5 rounded-md bg-teal-700 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-teal-800" wire:loading.attr="disabled">
        Send message
    </button>
</form>
