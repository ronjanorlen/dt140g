  {{-- Code block added to embed feature --}}
  
  @if ($stages->count() > 0)
        <div class="mt-4">
            <x-providers::form.select
            x-model="stageId"
            name="stage_id"
            :options="$stages->pluck('name', 'id')"
            class="block w-full"
            label="Filter classes by stage?"
            />
        </div>
  @endif