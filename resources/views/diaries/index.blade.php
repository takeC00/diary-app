{{-- 共通コンポーネント：head --}}
<x-head />

<body>

    {{-- 共通コンポーネント：header --}}
    <x-header />

    <main class="bg-orange-100">

        {{-- 共通コンポーネント：CardList --}}
        <x-card-list :diaries="$diaries" />

        {{-- 共通コンポーネント：pagination --}}
        <x-pagination :diaries="$diaries" />

        {{-- 共通コンポーネント：footer --}}
        <x-footer />

    </main>
</body>
