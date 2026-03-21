<header class="bg-gray-900 text-white sticky top-0 z-50" x-data="{ open: false }">
    <div class="max-w-4xl mx-auto px-6 flex flex-col md:flex-row md:items-center md:justify-between">
        <!-- ロゴ -->
        <div class="flex items-center justify-between">
            <a href="/diaries" class="flex items-center gap-2">
                <img src="/images/logo.png" class="h-20">
                <span class="font-bold text-lg">Photo Diary</span>
            </a>
            <!-- ハンバーガー -->
            <button x-on:click="open = !open; console.log(open)" class="md:hidden">
                <svg x-show="!open" class="h-8 w-8 fill-white" viewBox="0 0 640 640">
                    <path
                        d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z" />
                </svg>
                <svg x-show="open" class="h-8 w-8 fill-white" viewBox="0 0 640 640">
                    <path
                        d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                </svg>
            </button>
        </div>


        <!-- ナビ -->
        <nav :class="{ 'block': open, 'hidden': !open }" class="hidden md:block px-4 pb-12 md:pb-0">
            <ul class="flex flex-wrap justify-center gap-4 text-sm h-20 items-center">
                <li class="">
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300 whitespace-nowrap">
                        自分日記
                    </a>
                </li>

                <li class="">
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300 whitespace-nowrap">
                        マイページ
                    </a>
                </li>

                <li class="">
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 rounded-lg border border-white/30 text-white/80
                                hover:text-white hover:border-white hover:bg-white/10
                                transition duration-300 whitespace-nowrap">
                        公開日記
                    </a>
                </li>

                <li class="">
                    <form method="POST" action="{{ route('logout') }}" class="flex m-0">
                        @csrf
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 rounded-lg border border-white/30 text-white/80
                                    hover:text-white hover:border-white hover:bg-white/10
                                    transition duration-300 bg-transparent appearance-none leading-normal">
                            ログアウト
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>
