<x-layout title="TOP">
  <div class="loginPage bg-gray-200 min-h-screen">
    <div class="loginPage_contents flex flex-col justify-between h-80">
      <h2 class="loginPage_contents_title mt-12 text-center font-bold mb-8 text-2xl">新しいマッチを見つけよう</h1>
      <div class="btn loginPage_contents_btn mx-auto bg-red-500 py-3 px-8 rounded-lg">
        <a class="text-white" href="{{ route('login') }}">メールアドレスでログインする</a>
      </div>
    </div>
  </div>
</x-layout>