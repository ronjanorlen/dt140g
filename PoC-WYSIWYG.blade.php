{{-- Showcasing test implementation of different WYSIWYGs in slideover --}}

@if (provider()->features()->active(\Domain\Providers\Features\CustomerComms::class))
    <x-providers::slideover {{ $attributes }}>
        <x-slot:trigger>
            <x-providers::button
                icon="heroicon-o-envelope"
                text="Send email"
            />
        </x-slot:trigger>

        <x-slot:title>Send email</x-slot:title>

        {{-- EASYMDE EDITOR --}}
        <div class="mb-4">
            <div
                x-data="EasyMDE"
                x-init="init"
                class="mx-auto flex max-w-sm items-center gap-x-4 rounded-xl bg-white p-6">
                  <textarea
                      x-ref="easymde"
                      name="content"
                      class="easy-mde">
                  </textarea>
        </div> 

        {{-- TIPTAP EDITOR --}}
        <div x-data="editor('<p>Hello world! :-)</p>')">
            <template x-if="isLoaded()">
                <div class="menu">
                    <button
                        @click="toggleHeading({ level: 1 })"
                        :class="{ 'is-active': isActive('heading', { level: 1 }, updatedAt) }"
                    >
                    H1
                    </button>

                    <button
                        @click="toggleHeading({ level: 2 })"
                        :class="{ 'is-active': isActive('heading', { level: 2 }, updatedAt) }"
                        >
                        H2
                    </button>

                    <button
                        @click="toggleHeading({ level: 3 })"
                        :class="{ 'is-active': isActive('heading', { level: 3 }, updatedAt) }"
                        >
                        H3
                    </button>

                    <button @click="toggleBold()" :class="{ 'is-active' : isActive('bold', updatedAt) }">
                        Bold
                    </button>

                    <button @click="toggleItalic()" :class="{ 'is-active' : isActive('italic', updatedAt) }">
                        Italic
                    </button>
                </div>
            </template>
            <div x-ref="tiptap"></div>
        </div>

            {{-- TINYMCE EDITOR --}}
            <div
                x-ref="tinymceContainer"
                x-data="tinymce"
                class="mx-auto flex max-w-sm items-center gap-x-4 rounded-xl bg-white p-6">
                    <textarea
                        id="tinymce"
                        name="content"
                        class="w-full h-64">
                    </textarea>
            </div>

            {{-- EDITORJS EDITOR --}}
            <div
                x-data="editorJS"
                x-init="init"
                class="mx-auto flex max-w-sm items-center gap-x-4 rounded-xl bg-white p-6">
                  <div x-ref="editorjs" class="w-full border border-gray-300"></div>
            </div>
    </x-providers::slideover>
@endif
