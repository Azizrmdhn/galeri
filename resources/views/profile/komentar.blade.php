 <form method="POST" action="/detailImage/{fotoID}/{id}" class="mb-6 w-full">
    @csrf
    <input type="text" hidden name="id" value="{{$user->id}}" id="id">
    <input type="text" hidden name="fotoID" value="{{$dataImage->fotoID}}" id="fotoID">
    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <label for="comment" class="sr-only">Your comment</label>
        <textarea id="comment" rows="6"
            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
            placeholder="Write a comment..." name="isiKomentar" required></textarea>
    </div>
    <button type="submit"
        class="block w-full select-none rounded-lg bg-gray-900 py-3 px-4 text-center align-middle font-sans text-sm font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
        Post comment
    </button>
</form>

