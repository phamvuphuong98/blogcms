<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Add Portfolio</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Portfolio Details
                </p>
                <form method="POST" action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div class="mb-1">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" id="title" value="{{ old('title') }}" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title of the Portfolio" required>
                </div>
                <div class="mb-1">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" value="{{ old('slug') }}"  name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex: bla bla bla" required>
                </div>
                <div class="mb-2">
                    <label class="block text-sm text-gray-600" for="description">Description</label>
                    <textarea id="summernote" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description" name="description" required="">{{ old('description') }}</textarea>
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">Banner</label>
                    <input type="file" id="banner" name="banner">
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">Product Photos</label>
                    <input type="file" id="product_photos" name="product_photos[]" multiple>
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">A Content Long Image</label>
                    <input type="file" id="a_content_longs" name="a_content_longs[]" multiple>
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">A Contents</label>
                    <input type="file" id="a_contents" name="a_contents[]" multiple>
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">Brand Story Long Image</label>
                    <input type="file" id="brand_story_longs" name="brand_story_longs[]" multiple>
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">Brand Story</label>
                    <input type="file" id="brand_stories" name="brand_stories[]" multiple>
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">Videos</label>
                    <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="https://www.youtube.com/watch?v=sfrxJMUPcns&#13;&#10;https://www.youtube.com/watch?v=sfrxJMUPcns" name="videos" >{{ old('videos') }}</textarea>
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">Social Post Designs</label>
                    <input type="file" id="social_post_designs" name="social_post_designs[]" multiple>
                </div>
                <div class="mb-1">
                    <label class="block text-sm text-gray-600" for="message">Packging Designs</label>
                    <input type="file" id="packging_designs" name="packging_designs[]" multiple>
                </div>
                <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add Portfolio</button>
                </form>
            </div>
        </main>
    </div>

</x-admin-layout>
