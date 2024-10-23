<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Doc - Documentation</title>
    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --background: #f8fafc;
            --surface: #ffffff;
            --text: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            background-color: var(--background);
            color: var(--text);
            line-height: 1.6;
        }

        .container {
            display: grid;
            grid-template-columns: 280px 1fr;
            min-height: 100vh;
        }

        .sidebar {
            background-color: var(--surface);
            border-right: 1px solid var(--border);
            padding: 1rem;
            overflow-y: auto;
            height: 100vh;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            font-size: 1.25rem;
            padding: 1rem;
            border-bottom: 1px solid var(--border);
        }

        .nav-links {
            list-style-type: none;
            margin-top: 1rem;
        }

        .nav-links li {
            margin-bottom: 0.5rem;
        }

        .nav-links a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
            text-decoration: none;
            color: var(--text-muted);
            border-radius: 0.375rem;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-links a:hover, .nav-links a.active {
            background-color: var(--primary);
            color: var(--surface);
        }

        .nav-section {
            margin-top: 1rem;
            font-weight: 600;
        }

        .nav-subsection {
            margin-left: 1rem;
            font-size: 0.9rem;
        }

        .main-content {
            display: flex;
            flex-direction: column;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            background-color: var(--surface);
            border-bottom: 1px solid var(--border);
        }

        .search-bar {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .search-bar input {
            width: 100%;
            padding: 0.5rem 0.5rem 0.5rem 2rem;
            border: 1px solid var(--border);
            border-radius: 0.375rem;
        }

        .search-bar svg {
            position: absolute;
            left: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        .content {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 2rem;
            padding: 2rem;
        }

        .main-area {
            max-width: 800px;
        }

        h1 {
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .content-description {
            color: var(--text-muted);
            font-size: 1.125rem;
            margin-bottom: 2rem;
        }

        .tabs {
            display: flex;
            border-bottom: 1px solid var(--border);
            margin-bottom: 1rem;
        }

        .tab {
            padding: 0.5rem 1rem;
            cursor: pointer;
            border-bottom: 2px solid transparent;
        }

        .tab.active {
            border-bottom-color: var(--primary);
            color: var(--primary);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .subsection {
            margin-top: 2rem;
        }

        .subsection h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .code-example {
            background-color: #f1f5f9;
            padding: 1rem;
            border-radius: 0.375rem;
            margin-top: 1rem;
            overflow-x: auto;
        }

        .on-this-page {
            position: sticky;
            top: 2rem;
        }

        .on-this-page ul {
            list-style-type: none;
        }

        .on-this-page a {
            display: block;
            padding: 0.25rem 0;
            color: var(--text-muted);
            text-decoration: none;
        }

        .on-this-page a:hover {
            color: var(--primary);
        }

        @media (max-width: 1024px) {
            .container {
                grid-template-columns: 1fr;
            }
            .sidebar {
                display: none;
            }
            .content {
                grid-template-columns: 1fr;
            }
            .on-this-page {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 1 1 3-3h7z"></path>
                </svg>
                <span>{{ config('app.name', 'Auto Doc') }}</span>
            </div>
            <nav>
                <ul class="nav-links">
                    @foreach($sections as $section)
                        <li class="nav-section">{{ $section['name'] }}</li>
                        @foreach($section['subsections'] as $subsection)
                            <li class="nav-subsection">
                                <a href="#" data-title="{{ $subsection['name'] }}"
                                   data-content="{{ json_encode($subsection['content']) }}"
                                   data-uml="{{ json_encode($subsection['uml']) }}"
                                   data-relationships="{{ json_encode($subsection['relationships']) }}">
                                   {{ $subsection['name'] }}
                                </a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="header">
                <div class="search-bar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="search" placeholder="Search documentation...">
                </div>
                <button class="user-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="sr-only">Toggle user menu</span>
                </button>
            </header>

            <div class="content">
                <div class="main-area">
                    <div class="tabs">
                        <div class="tab active" data-tab="content">Content</div>
                        <div class="tab" data-tab="uml">UML Diagrams</div>
                        <div class="tab" data-tab="relationships">Relationships</div>
                    </div>
                    <!-- Tab Content -->
                    <div id="tab-content-area">
                        <div class="tab-content" id="content">
                            <!-- Initial content loaded here; can be updated dynamically -->
                        </div>

                        <div class="tab-content" id="uml" style="display: none;">
                            <!-- UML content will be dynamically updated -->
                        </div>

                        <div class="tab-content" id="relationships" style="display: none;">
                            <!-- Relationships content will be dynamically updated -->
                        </div>
                    </div>
                </div>
                <aside class="on-this-page">
                    <h4>On This Page</h4>
                    <ul>
                        @foreach($onThisPageSections as $section)
                            <li><a href="#">{{ $section }}</a></li>
                        @endforeach
                    </ul>
                </aside>
            </div>
        </main>
    </div>

    <script>
        // JavaScript for tab switching
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function () {
                // Remove active class from all tabs and tab contents
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.style.display = 'none');

                // Add active class to the clicked tab and show the related content
                tab.classList.add('active');
                document.getElementById(tab.dataset.tab).style.display = 'block';
            });
        });

        // JavaScript for dynamic subsection updates in "content", "uml", and "relationships" tabs
        document.querySelectorAll('.nav-subsection a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const title = this.dataset.title;
                const contentData = JSON.parse(this.dataset.content);
                const umlData = JSON.parse(this.dataset.uml);
                const relationshipsData = JSON.parse(this.dataset.relationships);

                // Update the main content area in the content tab
                const contentTab = document.getElementById('content');
                contentTab.innerHTML = contentData.map(item => `
                    <div class="subsection">
                        <h3>${item.title}</h3>
                        <p>${item.description}</p>
                        <div class="code-example">
                            <pre><code>${item.code}</code></pre>
                        </div>
                    </div>
                `).join('');

                // Update UML tab
                const umlTab = document.getElementById('uml');
                umlTab.innerHTML = umlData.map(item => `
                    <div class="subsection">
                        <h3>${item.title}</h3>
                        <p>${item.description}</p>
                        <div class="code-example">
                            <pre><code>${item.code}</code></pre>
                        </div>
                    </div>
                `).join('');

                // Update Relationships tab
                const relationshipsTab = document.getElementById('relationships');
                relationshipsTab.innerHTML = relationshipsData.map(item => `
                    <div class="subsection">
                        <h3>${item.title}</h3>
                        <p>${item.description}</p>
                        <div class="code-example">
                            <pre><code>${item.code}</code></pre>
                        </div>
                    </div>
                `).join('');

                // Switch to the content tab
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.style.display = 'none');
                document.querySelector('.tab[data-tab="content"]').classList.add('active');
                contentTab.style.display = 'block';
            });
        });
    </script>
</body>

</html>