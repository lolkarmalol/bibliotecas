<div class="space-y-6">
    
    <div>
        <x-input-label for="book_id" :value="__('Book Id')"/>
        <x-text-input id="book_id" name="book_id" type="text" class="mt-1 block w-full" :value="old('book_id', $bookCopy?->book_id)" autocomplete="book_id" placeholder="Book Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('book_id')"/>
    </div>
    <div>
        <x-input-label for="library_id" :value="__('Library Id')"/>
        <x-text-input id="library_id" name="library_id" type="text" class="mt-1 block w-full" :value="old('library_id', $bookCopy?->library_id)" autocomplete="library_id" placeholder="Library Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('library_id')"/>
    </div>
    <div>
        <x-input-label for="shelf_id" :value="__('Shelf Id')"/>
        <x-text-input id="shelf_id" name="shelf_id" type="text" class="mt-1 block w-full" :value="old('shelf_id', $bookCopy?->shelf_id)" autocomplete="shelf_id" placeholder="Shelf Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('shelf_id')"/>
    </div>
    <div>
        <x-input-label for="copy_number" :value="__('Copy Number')"/>
        <x-text-input id="copy_number" name="copy_number" type="text" class="mt-1 block w-full" :value="old('copy_number', $bookCopy?->copy_number)" autocomplete="copy_number" placeholder="Copy Number"/>
        <x-input-error class="mt-2" :messages="$errors->get('copy_number')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>