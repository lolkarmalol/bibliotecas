<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $author?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="biography" :value="__('Biography')"/>
        <x-text-input id="biography" name="biography" type="text" class="mt-1 block w-full" :value="old('biography', $author?->biography)" autocomplete="biography" placeholder="Biography"/>
        <x-input-error class="mt-2" :messages="$errors->get('biography')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>