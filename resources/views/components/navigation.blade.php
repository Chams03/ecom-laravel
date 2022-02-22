<div class="px-36 p-4 h-20">
    <div class="flex justify-between">
        <div class="text-center">
            <h1 class="pt-2"><a href="{{ route('index') }}">Ecom-Laravel</a></h1>
        </div>
        <div class="flex">
            <form action="" class="" id="searchBox">
                <input class="border-b border-b-black p-2 w-96 focus:outline-none" type="text" placeholder="Search" id="item_name">
            </form>
            <button class="px-3" type="submit" value="Submit" form="searchBox">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <div class="pt-2">
            <div>
                <ul class="flex justify-between">
                    <li class="px-3"><a href=""><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg></a></li>
                    <li class="px-3"><a href="{{ route('login') }}">Login</a></li>
                    <li class="px-3"><a href="{{ route('register' )}}">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    
</div>