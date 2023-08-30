<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Edit Review</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Review Details
                </p>
                <form method="POST" action="{{ route('admin.review.update', $review->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div class="mb-2">
                    <label class="block text-sm text-gray-600" for="message">Image</label>
                    <input type="file" id="myimage" name="image">
                </div>
                <div class="mb-2">
                    <label class="block text-sm text-gray-600" for="message">Thumbnail</label>
                    <input type="file" id="myimage" name="thumb">
                </div>
                <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Update Review</button>
                </form>
            </div>
        </main>
    </div>
</x-admin-layout>
