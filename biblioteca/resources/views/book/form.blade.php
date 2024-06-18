<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $book?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="publication_date" :value="__('Publication Date')"/>
        <x-text-input id="publication_date" name="publication_date" type="text" class="mt-1 block w-full" :value="old('publication_date', $book?->publication_date)" autocomplete="publication_date" placeholder="Publication Date"/>
        <x-input-error class="mt-2" :messages="$errors->get('publication_date')"/>
    </div>
    <div>
        <x-input-label for="author_id" :value="__('Author Id')"/>
        <x-text-input id="author_id" name="author_id" type="text" class="mt-1 block w-full" :value="old('author_id', $book?->author_id)" autocomplete="author_id" placeholder="Author Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('author_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>