<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @laravelPWA
</head>

<body>
  <div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col bg-base-200">
      <div class="max-w-7xl w-full mx-auto">
        <!-- Navbar -->
        <div class="w-full navbar bg-base-200">
          <div class="flex-none lg:hidden">
            <label for="my-drawer-3" class="btn btn-square btn-ghost">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </label>
          </div>
          <div class="flex-1 px-2 mx-2 select-none font-bold">Yandra Muslim 💕</div>
          <div class="flex-none hidden lg:block">
            <ul class="menu menu-horizontal">
              <!-- Navbar menu content here -->
              <li>
                <a href="/">Data Barang</a>
              </li>
              <li>
                <a href="/request">Form Request Barang</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="w-full min-h-[80vh] bg-base-200 px-10">
        <!-- Form -->
        <div class="container h-full py-5">
          <h1 class="text-center text-5xl font-bold">Form Request Barang</h1>
          <form class="flex flex-col gap-4">
            <div class="flex flex-col gap-3">
              <label for="kode" class="font-serif text-lg">Kode :</label>
              <input type="text" id="kode" placeholder="Type here" class="input w-full" />
            </div>
            <div class="flex flex-col gap-3">
              <label for="nama_brg" class="font-serif text-lg">Nama Barang :</label>
              <input type="text" id="nama_brg" placeholder="Type here" class="input w-full" />
            </div>
            <div class="flex flex-col gap-3">
              <label for="jenis" class="font-serif text-lg">Jenis :</label>
              <input type="text" id="jenis" placeholder="Type here" class="input w-full" />
            </div>
            <div class="flex flex-col gap-3">
              <label for="stock" class="font-serif text-lg">Stock :</label>
              <input type="text" id="stock" placeholder="Type here" class="input w-full" />
            </div>
            <div class="flex flex-row gap-3 justify-end">
              <button class="btn btn-secondary" type="reset">
                RESET
              </button>
              <button class="btn btn-primary">SUBMIT</button>
            </div>
          </form>
        </div>
        <footer class="footer footer-center p-10 bg-base-200 text-primary-content">
          <div>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="inline-block fill-current">
              <path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </svg>
            <p class="font-bold">
              Build With ❤️ By Yandra Muslim
            </p>
            <p>Copyright © 2022 - All right reserved</p>
          </div>

        </footer>
      </div>

    </div>
    <div class="drawer-side">
      <label for="my-drawer-3" class="drawer-overlay"></label>
      <ul class="menu p-4 w-80 bg-base-100">
        <div class="avatar flex flex-col items-center py-10 gap-6">
          <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
            <img src="https://placeimg.com/192/192/people" />
          </div>
          <h1 class="flex-1 select-none font-bold">Yandra Muslim 💕</h1>

        </div>
        <!-- Sidebar content here -->
        <li>
          <a href="/">Data Barang</a>
        </li>
        <li>
          <a href="/request">Form Request Barang</a>

        </li>
      </ul>
    </div>
  </div>

</body>

</html>