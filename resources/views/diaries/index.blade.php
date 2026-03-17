<html lang="ja" data-theme="dark-blue">

<head>
    <meta charset="utf-8" data-next-head="">
    <meta content="width=device-width, initial-scale=1" name="viewport" data-next-head="">
    <title data-next-head="">DIARY-APP</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-gray-900 text-white sticky top-0 z-50">
        <div
            class="max-w-4xl mx-auto px-6 py-4
                    flex flex-col md:flex-row
                    items-center justify-center
                    gap-4 md:gap-8">

            <!-- ロゴ -->
            <a href="#" class="flex items-center gap-2">
                <img src="/images/logo.png" class="h-20">
                <span class="font-bold text-lg">Photo Diary</span>
            </a>

            <!-- ナビ -->
            <nav>
                <ul class="flex flex-col md:flex-row items-center gap-4 md:gap-6 text-sm">

                    <li>
                        <a href="#"
                            class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300">
                            公開日記
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300">
                            自分の日記
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300">
                            マイページ
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
    </header>
    <main class="bg-orange-100">
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-8">
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
        </section>
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-8"> <a href="#"
                class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
        </section>
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-8"> <a href="#"
                class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
            <a href="#" class="block group">
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
                            src="/images/pic-1.jpg">

                        <h2 class="text-lg font-bold text-center line-clamp-2 min-h-[3.5rem]">
                            タイトルタイトルタイトル
                        </h2>

                        <p class="text-sm text-gray-600 text-center">2026-06-01</p>

                        <p class="mt-auto text-sm text-gray-600 text-right">
                            著者：たけのこ
                        </p>

                    </div>
                </div>
            </a>
        </section>
        <section class="pb-10 mt-10 flex justify-center">
            {{ $diaries->links('pagination::tailwind') }}
        </section>
    </main>
    <footer class="bg-gray-900 text-white">
        <div
            class="max-w-4xl mx-auto px-6 py-6
                    flex flex-col md:flex-row
                    items-center justify-center
                    gap-6 md:gap-12">

            <!-- ロゴ -->
            <div class="flex items-center">
                <img class="h-32 w-auto" src="/images/logo.png" alt="Photo Diary">
            </div>

            <!-- ナビ -->
            <nav>
                <ul class="flex flex-col md:flex-row items-center gap-4 md:gap-6 text-sm">
                    <li>
                        <a href="#"
                            class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300">
                            マイページ
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300">
                            公開日記一覧
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300">
                            自分の日記一覧
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </footer>
</body>
