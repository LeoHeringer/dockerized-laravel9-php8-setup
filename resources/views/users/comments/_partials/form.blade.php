<div class="w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <textarea name="body" id="" cols="30" rows="10" placeholder="Comentário"></textarea>
    <label for="visible">
        <input type="checkbox" name="visible">
        Visível?
    </label>
    <button type="submit" class="w-full shadow bg-gray-500 hover:bg-gray-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>
</div>