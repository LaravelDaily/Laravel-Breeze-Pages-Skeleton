@if ($message = Session::get('success'))
    <div class="bg-green-100 mb-4 px-5 py-4 w-full border-l-4 border-green-500">
        <div class="flex justify-between">
            <div class="flex space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     class="flex-none fill-current text-green-500 h-4 w-4">
                    <path
                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z"/>
                </svg>
                <div
                    class="flex-1 leading-tight text-sm text-green-700 font-medium">{{ $message }}</div>
            </div>
        </div>
    </div>
@endif
