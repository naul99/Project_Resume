<form wire:submit.prevent="update">
    @if (session()->has('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg></div>
                <div>
                    <p class="font-bold">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="about" class="block text-sm/6 font-medium text-gray-900">Interests</label>
                    <div class="mt-2" wire:ignore>
                        <textarea id="editor" wire:model="description" data-description="@this" rows="6"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">{!!$description!!}</textarea>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-600">Write a few description about yourself.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <button id="submit" type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
</form>
@push('scripts')
<script type="module">
     import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph,Markdown 
    } from 'ckeditor5';
    ClassicEditor
        .create(document.querySelector('#editor'),{
            plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        })
        .then(editor => {
          document.querySelector('#submit').addEventListener('click',()=>{
            let description = $('#editor').data('description');
            eval(description).set('description',editor.getData());
          })
       })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
