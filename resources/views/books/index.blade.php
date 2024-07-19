<x-layouts.app>

    <section class="w-full">
        <h2 class="text-center text-xl mb-6 text-gray-600 font-bold">All books</h2>
        <ul>
            @foreach ($books as $book)
            <li class="bg-white p-2 rounded-lg mb-2 w-96 h-18 shadow-lg">
                <h3 class="font-bold mb-1">{{ $book->title }}</h3>
                <p>{{ $book->author }}</p>
            </li>
            @endforeach
        </ul>
    </section>

</x-layouts.app>