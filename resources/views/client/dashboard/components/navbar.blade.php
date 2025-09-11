<div class="w-full px-5 py-3 flex flex-col gap-5">
    <div class="w-full flex items-center justify-between">
        <div class="flex items-center gap-2">
            <svg id="panelToggleSvg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-panel-left-icon lucide-panel-left stroke-black dark:stroke-white">
                <rect width="18" height="18" x="3" y="3" rx="2" />
                <path d="M9 3v18" />
            </svg>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const svg = document.getElementById('panelToggleSvg');
                    const mainContainer = document.getElementById('mainContainer');
                    const sidebar = document.querySelector('section');

                    // Check saved state on page load
                    const isExpanded = localStorage.getItem('sidebarHidden') === 'true';

                    if (isExpanded) {
                        sidebar.style.display = 'none';
                        mainContainer.style.width = '100%';
                    } else {
                        sidebar.style.display = 'block';
                        mainContainer.style.width = '85%';
                    }

                    svg.addEventListener('click', function () {
                        const currentlyHidden = sidebar.style.display === 'none';

                        if (currentlyHidden) {
                            sidebar.style.display = 'block';
                            mainContainer.style.width = '85%';
                            localStorage.setItem('sidebarHidden', 'false');
                        } else {
                            sidebar.style.display = 'none';
                            mainContainer.style.width = '100%';
                            localStorage.setItem('sidebarHidden', 'true');
                        }
                    });
                });
            </script>
            @php
                $segments = request()->segments();
            @endphp
            <h1 class="text-xl font-thin text-black dark:text-white flex items-center">
                @foreach ($segments as $index => $segment)
                    <span class="mx-1">></span>
                    @php
                        $url = url(implode('/', array_slice($segments, 0, $index + 1)));
                    @endphp
                    <a href="{{ $url }}" class="font-normal">
                        {{ ucfirst($segment) }}
                    </a>
                @endforeach
            </h1>
        </div>
        <div class="relative">
            <button
                class="p-2 bg-white dark:bg-[#18181B] rounded-lg border border-black/20 dark:border-gray-700 shadow-[0_1px_1px_rgb(0,0,0,0.2)] flex items-center"
                onclick="toggleDropdown()">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-sun-icon lucide-sun stroke-black dark:stroke-white">
                    <circle cx="12" cy="12" r="4" />
                    <path d="M12 2v2" />
                    <path d="M12 20v2" />
                    <path d="m4.93 4.93 1.41 1.41" />
                    <path d="m17.66 17.66 1.41 1.41" />
                    <path d="M2 12h2" />
                    <path d="M20 12h2" />
                    <path d="m6.34 17.66-1.41 1.41" />
                    <path d="m19.07 4.93-1.41 1.41" />
                </svg>
            </button>
            <div id="themeDropdown"
                class="hidden absolute top-full right-0 mt-2 w-32 bg-white dark:bg-[#18181B] rounded-lg border border-black/20 dark:border-gray-700 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <button
                    class="w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-900/70 text-black dark:text-white border-b border-black/20 dark:border-gray-700"
                    onclick="setTheme('light')">Light</button>
                <button
                    class="w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-900/70 text-black dark:text-white border-b border-black/20 dark:border-gray-700"
                    onclick="setTheme('dark')">Dark</button>
                <button
                    class="w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-900/70 text-black dark:text-white border-b border-black/20 dark:border-gray-700"
                    onclick="setTheme('system')">System</button>
            </div>
            <script>
                function setTheme(mode) {
                    const html = document.documentElement;
                    if (mode === 'light') {
                        html.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    } else if (mode === 'dark') {
                        html.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    } else if (mode === 'system') {
                        localStorage.removeItem('theme');
                        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                            html.classList.add('dark');
                        } else {
                            html.classList.remove('dark');
                        }
                    }
                    document.getElementById('themeDropdown').classList.add('hidden');
                }

                // Apply theme on page load
                (function () {
                    const theme = localStorage.getItem('theme');
                    const html = document.documentElement;
                    if (theme === 'dark') {
                        html.classList.add('dark');
                    } else if (theme === 'light') {
                        html.classList.remove('dark');
                    } else {
                        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                            html.classList.add('dark');
                        } else {
                            html.classList.remove('dark');
                        }
                    }
                })();
            </script>
        </div>
        <script>
            function toggleDropdown() {
                const dropdown = document.getElementById('themeDropdown');
                dropdown.classList.toggle('hidden');
            }
        </script>
    </div>