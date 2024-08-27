<form action="{{ route('process.url') }}" method="POST" class="space-y-4 p-2 w-[50%] m-auto">
    @csrf
    <div>
        <label for="url" class="block text-sm font-medium text-gray-700">INGRESA URL</label>
        <input type="text" name="url" id="url" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>
    <div>
        <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Enviar
        </button>
    </div>
</form>