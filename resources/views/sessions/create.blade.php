<x-layout>
    
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-8 rounded-xl">
            <x-panel>

                <h1 class="text-center font-bold text-xl text-gray-600">Log In</h1>
                
                <form method="POST" action="/sessions" class="mt-10">
                    @csrf
                    <x-form.input name="email" type="email"/>
                    <x-form.input name="password" type="password"/>
                    
                    <x-form.button>Log In</x-form.button>
                    
                </form>
            </x-panel>
        </main>
    </section>
    
</x-layout>