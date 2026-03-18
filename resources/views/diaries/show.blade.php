{{-- 共通コンポーネント：head --}}
<x-head />

<body>
    {{-- 共通コンポーネント：header --}}
    <x-header />
    <main class="bg-orange-100">
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-8">
                <a href="/diaries/show/" class="block group">
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-xl
                        shadow-xl overflow-hidden
                        transition-all duration-300 ease-out
                        group-hover:-translate-y-2 group-hover:scale-[1.02]
                        group-hover:shadow-[0_20px_40px_rgba(0,0,0,0.2)]">

                        <div class="p-4 flex flex-col gap-2 h-full">

                            <img class="block w-full h-48 object-cover rounded-lg
                                transition-transform duration-300
                                group-hover:scale-105"
                                src="{{ asset('storage/' . $diary->image) }}">

                            <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                                {{ $diary->title }}
                            </h2>

                            <p class="text-sm text-gray-600 text-center">{{ $diary->diary_date }}</p>

                            <p class="mt-auto text-sm text-gray-600 text-right">
                                {{ $diary->user->name }}
                            </p>

                        </div>
                    </div>
                </a>
        </section>
        
        {{-- 共通コンポーネント：footer --}}
        <x-footer />
    </main>
</body>
