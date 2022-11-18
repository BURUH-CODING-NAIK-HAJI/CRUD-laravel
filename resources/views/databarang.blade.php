<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
  </script>
  @vite('resources/css/app.css')
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
          <div class="flex-1 px-2 mx-2 select-none">Yandra Muslim</div>
          <div class="flex-none hidden lg:block">
            <ul class="menu menu-horizontal">
              <!-- Navbar menu content here -->
              <li>
                <a href="http://127.0.0.1:8000">Data Barang</a>
              </li>
              <li>
                <a href="http://127.0.0.1:8000/databarang">Form Data Barang</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="w-full min-h-screen bg-base-200 px-10">
        <div class="mx-auto min-h-screen max-w-7xl flex flex-col gap-4 py-5">
          <h1 class="text-center text-5xl font-bold">Form Data Barang</h1>
          <div class="flex justify-end">
            <!-- The button to open modal -->
            <a href="#my-modal-2" class="btn btn-primary">Tambah Data</a>
            <!-- Put this part before </body> tag -->
            <div class="modal" id="my-modal-2">
              <div class="modal-box rounded-md">
                <form class="flex flex-col gap-1" action="/">
                  <h1 class="text-center text-xl font-medium">Form Tambah Data</h1>
                  <div class="flex flex-col gap-2">
                    <label for="nama">No: </label>
                    <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Nomor...">
                  </div>
                  <div class="flex flex-col gap-3">
                    <label for="nama">Kode: </label>
                    <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Kode ...">
                  </div>
                  <div class="flex flex-col gap-3">
                    <label for="nama">Nama Barang: </label>
                    <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Nama Barang ...">
                  </div>
                  <div class="flex flex-col gap-3">
                    <label for="nama">Jenis: </label>
                    <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Jenis ...">
                  </div>
                  <div class="flex flex-col gap-3">
                    <label for="nama">Stock: </label>
                    <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Stock ...">
                  </div>
                  <div class="modal-action">
                    <button>
                      <a href="#" class="btn bg-red-600 text-white">CANCEL</a>
                    </button>
                    <button type="button">
                      <a href="/" class="btn bg-primary text-white">SUBMIT</a>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="w-full overflow-x-auto">
            <table class="table table-zebra w-full ">
              <thead>
                <tr>
                  <th></th>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Barang</th>
                  <th>Jenis</th>
                  <th>Stock</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                <tr>
                  <th></th>
                  <th>1</th>
                  <th>001</th>
                  <td>Blue</td>
                  <td>Cy Ganderton</td>
                  <td>Quality Control Specialist</td>
                  <td>
                    <div class="flex gap-3">
                      <div class="flex justify-end">
                        <!-- The button to open modal -->
                        <a href="#my-modal-3" class="btn btn-primary text-white">EDIT</a>
                        <!-- Put this part before </body> tag -->
                        <div class="modal" id="my-modal-3">
                          <div class="modal-box rounded-md">
                            <form class="flex flex-col gap-1" action="/">
                              <h1 class="text-center text-xl font-medium">Form Edit Data</h1>
                              <div class="flex flex-col gap-2">
                                <label for="nama">No: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Nomor...">
                              </div>
                              <div class="flex flex-col gap-3">
                                <label for="nama">Kode: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Kode ...">
                              </div>
                              <div class="flex flex-col gap-3">
                                <label for="nama">Nama Barang: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Nama Barang ...">
                              </div>
                              <div class="flex flex-col gap-3">
                                <label for="nama">Jenis: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Jenis ...">
                              </div>
                              <div class="flex flex-col gap-3">
                                <label for="nama">Stock: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Stock ...">
                              </div>
                              <div class="modal-action">
                                <button>
                                  <a href="#" class="btn bg-red-600 text-white">CANCEL</a>
                                </button>
                                <button type="button">
                                  <a href="/" class="btn bg-primary text-white">SUBMIT</a>
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <label for="my-modal" class="btn bg-red-500 text-white">Delete</label>
                      <!-- Put this part before </body> tag -->
                      <input type="checkbox" id="my-modal" class="modal-toggle" />
                      <div class="modal">
                        <div class="modal-box">
                          <h3 class="font-bold text-lg">Perhatikan!</h3>
                          <p class="py-4">Anda Yakin Ingin Menghapus?</p>
                          <div class="modal-action">
                            <label for="my-modal" class="btn bg-red-500 text-white">CANCEL</label>
                            <label for="my-modal" class="btn bg-green-500 text-white">YES</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>

              </tbody>
            </table>
          </div>
        </div>
        <footer class="footer footer-center p-10 bg-base-200 text-primary-content">
          <div>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="inline-block fill-current">
              <path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </svg>
            <p class="font-bold">
              ACME Industries Ltd. <br />Providing reliable tech since 1992
            </p>
            <p>Copyright © 2022 - All right reserved</p>
          </div>
          <div>
            <div class="grid grid-flow-col gap-4">
              <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                </svg></a>
              <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                </svg></a>
              <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                </svg></a>
            </div>
          </div>
        </footer>
      </div>

    </div>
    <div class="drawer-side">
      <label for="my-drawer-3" class="drawer-overlay"></label>
      <ul class="menu p-4 w-80 bg-base-100">
        <!-- Sidebar content here -->
        <li>
          <a href="http://127.0.0.1:8000">Data Barang</a>
        </li>
        <li>
          <a href="http://127.0.0.1:8000/databarang">Form Data Barang</a>
        </li>
      </ul>
    </div>
  </div>
</body>

</html>