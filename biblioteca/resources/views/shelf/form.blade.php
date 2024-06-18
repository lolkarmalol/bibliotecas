<div class="space-y-6">
    
    <div>
        <x-input-label for="theme_id" :value="__('Theme Id')"/>
        <x-text-input id="theme_id" name="theme_id" type="text" class="mt-1 block w-full" :value="old('theme_id', $shelf?->theme_id)" autocomplete="theme_id" placeholder="Theme Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('theme_id')"/>
    </div>
    <div>
        <x-input-label for="code" :value="__('Code')"/>
        <x-text-input id="code" name="code" type="text" class="mt-1 block w-full" :value="old('code', $shelf?->code)" autocomplete="code" placeholder="Code"/>
        <x-input-error class="mt-2" :messages="$errors->get('code')"/>
    </div>
    <div>
        <x-input-label for="library_id" :value="__('Library Id')"/>
        <x-text-input id="library_id" name="library_id" type="text" class="mt-1 block w-full" :value="old('library_id', $shelf?->library_id)" autocomplete="library_id" placeholder="Library Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('library_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>