<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf 
        
        <div class="mt-2">
  <x-form-field>
    <x-form-label for="title">Title</x-form-label>

    <x-form-input name="title" id="title" placeholder="CEO" required></x-form-input>

    <x-form-error name="title"/>
  </x-form-field>
    </div>

    <div class="mt-2">
    <x-form-field>

    <x-form-label for="salary">Salary</x-form-label>

    <x-form-input name="salary" id="salary" placeholder="60000" required></x-form-input>

    <x-form-error name="salary"/>
    </div>
    </x-form-field>


<div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
     <x-form-button>Save</x-form-button>
    </div>
  </form>
</x-layout>

