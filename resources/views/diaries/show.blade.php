{{-- 共通コンポーネント：head --}}
<x-head />

<body>
    {{-- 共通コンポーネント：header --}}
    <x-header />
    <main class="bg-orange-100 min-h-screen p-8">
        <div class="mb-4 text-right">
            <a href="/diaries"
                class="inline-flex items-center px-4 py-2 rounded-lg border-4 border-black/30 text-black/80
                    hover:text-white hover:border-blue hover:bg-blue-300
                    transition duration-300 whitespace-nowrap">
                戻る
            </a>
            {{--@if($auth->user)--}}
            <a href="#"
                class="inline-flex items-center px-4 py-2 rounded-lg border-4  border-black/30 text-black/80
                hover:text-white hover:border-green hover:bg-green-300
                transition duration-300 whitespace-nowrap">
                編集
            </a>
            <a href="#"
                class="inline-flex items-center px-4 py-2 rounded-lg border-4  border-black/30 text-black/80
            hover:text-white hover:border-red hover:bg-red-300
            transition duration-300 whitespace-nowrap">
                削除
            </a>
            {{--@endif--}}
        </div>
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
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
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <h1 class="text-2xl font-serif font-bold">タイトル</h1>
                    <p>テストタイトル</p>
                </div>
                <div class="mb-4">
                    <h1 class="text-2xl font-serif font-bold">日付</h1>
                    <p>2000-00-00</p>
                </div>
                <div class="">
                    <h1 class="text-2xl font-serif font-bold">作者</h1>
                    <p>テスト作書</p>
                </div>
            </div>
        </section>
        <div class="mt-8">
            <h1 class="text-2xl font-serif font-bold">本文</h1>
            <p>テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文
                テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文テスト本文
            </p>
        </div>
    </main>
</body>
{{-- 共通コンポーネント：footer --}}
<x-footer />
