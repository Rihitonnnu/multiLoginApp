<x-tests.app>
    テスト
    <x-slot name="header">
        ヘッダー
    </x-slot>
    <x-tests.card title="タイトル" content="本文" :message=$message/>
    <x-tests.card title="CSS変更" content="本文" :message=$message class="bg-red-300"/>
</x-tests.app>
