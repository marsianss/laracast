<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf 
        
    <div class="mt-2">
        <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input type="email" name="email" id="email"  required></x-form-input>
            <x-form-error name="email"/>
        </x-form-field>
    </div>

    <div class="mt-2">
        <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <x-form-input type="password" name="password" id="password" required></x-form-input>
            <x-form-error name="password"/>
        </x-form-field>
    </div>


<div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
     <x-form-button>Register</x-form-button>
    </div>
  </form>
</x-layout>

