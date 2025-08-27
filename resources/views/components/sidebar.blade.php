  <!-- Sidebar -->
  <aside
      class="fixed top-16 left-0 h-full w-64 bg-white shadow-md transform transition-transform duration-300 z-30
             -translate-x-full md:translate-x-0"
      :class="open ? 'translate-x-0' : '-translate-x-full md:translate-x-0'">

      <ul class="p-4 space-y-2">
          <li><a href="/dashboard" class="block px-4 py-2 rounded hover:bg-blue-100">Dashboard</a></li>
          <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Manajemen Anggota</a></li>
          <li><a href="/buku-index" class="block px-4 py-2 rounded hover:bg-blue-100">Manajemen Buku</a></li>
          <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Peminjaman Buku</a></li>
          <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Pengembalian Buku</a></li>
          <li class="mb-1 last:mb-0">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit"
                      class="block w-full text-left text-gray-500/90 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate">
                      <span class="text-sm font-medium 2xl:opacity-100 duration-200">
                          Logout
                      </span>
                  </button>
              </form>
          </li>
      </ul>
  </aside>
