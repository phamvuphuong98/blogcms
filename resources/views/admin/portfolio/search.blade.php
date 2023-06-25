<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Portfolios</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Search Results
                </p>
                @if($portfolios->isNotEmpty())
                <div class="w-full bg-white text-left p-4 mb-2">Found {{ $portfolios->total() }} Records in portfolios</div>
                <div class="bg-white overflow-auto">
                    <table class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    ID</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Title</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Image</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Added by</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $portfolio)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $portfolio->id }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $portfolio->title }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light"><img src="{{ asset('storage/' . $portfolio->image) }}" width="100"></td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $portfolio->user->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        @can('update', $portfolio)
                                            <button
                                                class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                                                type="button"
                                                onclick="location.href='{{ route('admin.portfolio.edit', $portfolio->id) }}';">Edit</button>
                                        @endcan
                                        @can('delete', $portfolio)
                                            <form type="submit" method="POST" style="display: inline"
                                                action="{{ route('admin.portfolio.destroy', $portfolio->id) }}"
                                                onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded"
                                                    type="submit">Delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $portfolios->links() !!}
                @else
                <div class="w-full bg-red-500 text-left p-4 mb-2 text-white">Sorry No Results Founded, try again..</div>
                @endif
        </main>
    </div>
</x-admin-layout>
