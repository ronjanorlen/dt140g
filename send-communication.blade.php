{{-- Blade component for button and slideover including message component --}}

@if (provider()->features()->active(\Domain\Providers\Features\CustomerComms::class))
    <x-providers::slideover size="xlarge" {{ $attributes }}>
        <x-slot:trigger>
            <x-providers::button
                icon="heroicon-o-envelope"
                text="Send email"
            />
        </x-slot:trigger>
        
        <x-slot:title>
            <span class="flex items-center gap-2">
                <x-heroicon-o-envelope
                    class="w-5 h-5 text-gray-600"
                />
                Send email
            </span>
        </x-slot:title>

        <form
            action="{{ route('providers.communications.store') }}"
            method="POST"
            class="flex flex-col h-full"
        >

        <div class="flex-1 px-8 sm:px-10">
            @csrf
            <div>
                <x-providers::form.input
                    name="subject"
                    class="block w-full"
                    label="Subject"
                    required
                />
            </div>

            <div
                x-data="EasyMDE"
                class="mt-2"
            >
            <div class="mt-4">
                <textarea
                    x-ref="easymde"
                    name="body"
                    class="block w-full"
                ></textarea>
            </div>
        </div>
        </div>

        
        <div class="flex justify-between shrink-0 mt-6 p-4 bg-gray-50 space-x-4 sm:p-6">
            <x-providers::button @click="slideoverOpen = false" type="button" text="Cancel" colour="light-gray" tabindex="2" />
            <x-providers::button text="Send" colour="gray" class="grow" tabindex="3" />
        </div>
    </form>
    </x-providers::slideover>
@endif
