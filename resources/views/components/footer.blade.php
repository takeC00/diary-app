<footer class="bg-gray-900 text-white">
    <div
        class="max-w-4xl mx-auto px-6 py-6
                flex flex-col md:flex-row
                items-center justify-center
                gap-6 md:gap-12">

        <!-- ロゴ -->
        <div class="flex items-center">
            <a href="diaries" class="flex items-center gap-2">
                <img class="h-32 w-auto" src="/images/logo.png" alt="Photo Diary">
            </a>
        </div>

        <!-- ナビ -->
        <nav>
            <ul class="flex flex-col md:flex-row items-center gap-4 md:gap-6 text-sm">
                <li class="flex">
                    <a href="#"
                        class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                            hover:text-white hover:border-white hover:bg-white/10
                            transition duration-300">
                        マイページ
                    </a>
                </li>
                <li class="flex">
                    <a href="diaries"
                        class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                            hover:text-white hover:border-white hover:bg-white/10
                            transition duration-300">
                        公開日記一覧
                    </a>
                </li>
                <li class="flex">
                    <a href="#"
                        class="px-4 py-2 rounded-lg border border-white/30 text-white/80
                            hover:text-white hover:border-white hover:bg-white/10
                            transition duration-300">
                        自分の日記一覧
                    </a>
                </li>

                <li class="flex">
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
</footer>
