<x-layout>
    
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-8 border border-gray-300 rounded-xl">
            <h1 class="text-center font-bold text-xl text-gray-600">Register</h1>
            
            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="md-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-500" 
                        for="name">
                        Name
                    </label>

                    <input class="border border-gray-300 p-1 w-full mb-2 rounded" 
                        type="text" 
                        name="name" 
                        id="name"
                        value="{{ old('name') }}"
                        required>
                    
                    @error('name')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-500" 
                        for="username">
                        Username
                    </label>

                    <input class="border border-gray-300 p-1 w-full mb-2 rounded" 
                        type="text" 
                        name="username" 
                        id="username"
                        value="{{ old('username') }}"
                        required>

                    @error('username')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-500" 
                        for="email">
                        E-mail
                    </label>

                    <input class="border border-gray-300 p-1 w-full mb-2 rounded" 
                        type="email" 
                        name="email" 
                        id="email"
                        value="{{ old('email') }}"
                        required>
                    
                    @error('email')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-500" 
                        for="password">
                        Password
                    </label>

                    <input class="border border-gray-300 p-1 w-full rounded" 
                        type="password" 
                        name="password" 
                        id="password"
                        required>
                    
                    @error('password')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="md-6 mt-6">
                    <button type="submit" class="bg-blue-500 font-bold text-white rounded py-2 px-4 hover:bg-white hover:text-blue-400">
                        Submit
                    </button>
                </div>

            </form>
        </main>
    </section>
    
</x-layout>