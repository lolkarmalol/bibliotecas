<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $theme?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="color_code" :value="__('Color Code')"/>
        <x-text-input id="color_code" name="color_code" type="text" class="mt-1 block w-full" :value="old('color_code', $theme?->color_code)" autocomplete="color_code" placeholder="Color Code"/>
        <x-input-error class="mt-2" :messages="$errors->get('color_code')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>