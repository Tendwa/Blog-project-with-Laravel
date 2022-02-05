@auth    
<x-panel>
    
    <form method="POST" action="/posts/{{ $post->slug }}/comments">
         @csrf
     
         <header class="flex items-center">
             <img src="https://i.pravatar.cc/60?id={{ auth()->id() }}" alt="" width="50" height="50" class="rounded-full">
             <h3 class="ml-4">Add a comment </h3> 
         </header>
         
         <div class="mt-6">
         <textarea name="body" class="w-full text-sm" rows="5" placeholder="Say something..." required></textarea>
             @error('body')
              <span class="text-xs text-red-500">{{ $message }}</span>   
             @enderror
         </div>
         <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
        
                <x-form.button>Post</x-form.button>
            
        
        </div>
     </form>

 </x-panel>
@else
 <p class="font-semibold">
     <a href="/register" class="text-blue-500 hover:text-blue-600">Register</a> or <a href="/login" class="text-blue-500 hover:text-blue-600">Log In</a> to leave a comment
 </p>
@endauth
