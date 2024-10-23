<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Doc - Projects</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
        }
        body {
            background-color: #f7f9fc;
            color: #333;
            line-height: 1.6;
        }
        .container {
            display: grid;
            grid-template-columns: 280px 1fr;
            min-height: 100vh;
        }
        .sidebar {
            background-color: #f1f5f9;
            border-right: 1px solid #e2e8f0;
            padding: 1rem;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .nav-links {
            list-style-type: none;
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
            color: #4b5563;
            border-radius: 0.375rem;
            transition: background-color 0.3s;
        }
        .nav-links a:hover, .nav-links a.active {
            background-color: #e2e8f0;
            color: #1f2937;
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
            background-color: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
        }
        .search-bar {
            position: relative;
            width: 100%;
            max-width: 400px;
        }
        .search-bar input {
            width: 100%;
            padding: 0.5rem 0.5rem 0.5rem 2rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
        }
        .search-bar svg {
            position: absolute;
            left: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }
        .content {
            padding: 1.5rem;
        }
        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            font-size: 0.875rem;
            font-weight: 500;
        }
        .btn svg {
            margin-right: 0.5rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            border-radius: 0.5rem;
            overflow: hidden;
        }
        th, td {
            padding: 0.75rem 1rem;
            text-align: left;
        }
        th {
            background-color: #f8fafc;
            font-weight: 600;
            color: #4b5563;
        }
        tr:not(:last-child) {
            border-bottom: 1px solid #e2e8f0;
        }
        .progress-bar {
            width: 100%;
            background-color: #e2e8f0;
            border-radius: 9999px;
            overflow: hidden;
        }
        .progress {
            height: 0.5rem;
            background-color: #3b82f6;
        }
        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            margin-top: 1.5rem;
        }
        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e2e8f0;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
        }
        .card-description {
            color: #6b7280;
            margin-top: 0.25rem;
        }
        .card-content {
            padding: 1.5rem;
        }
        .card-footer {
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #e2e8f0;
        }
        select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
            background-color: white;
        }
        @media (max-width: 1024px) {
            .container {
                grid-template-columns: 1fr;
            }
            .sidebar {
                display: none;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <aside class="sidebar">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            <span>Auto Doc</span>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#" class="active"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"></path></svg> Projects</a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg> Documentation</a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Reports</a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a></li>
            </ul>
        </nav>
    </aside>
    <main class="main-content">
        <header class="header">
            <div class="search-bar">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="search" placeholder="Search projects...">
            </div>
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                <span class="sr-only">Toggle user menu</span>
            </button>
        </header>
        <div class="content">
            <div class="content-header">
                <h1 class="font-semibold text-lg md:text-2xl">Projects</h1>
                <button class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    <a style="color:white;text-decoration: none;" href="{{ route('create-project') }}" style="">Add Project</a>
                </button>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Last Updated</th>
                    <th>Documentation Status</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>

                        <td class="font-medium">{{ $project->name }}</td>
                        <td>Financial System</td>
                        <td>2 hours ago</td>
                        <td>
                            <div class="flex items-center">
                                <div class="w-full flex-1">
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 80%;"></div>
                                    </div>
                                </div>
                                <span class="ml-2 text-sm">80%</span>
                            </div>
                        </td>
                        <td class="text-right">
                            <a href="{{ route('get-doc', ['project' => $project->id]) }}" style="text-decoration: none; color: white;">
                                <button class="btn">View</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                <tr>

                    <td class="font-medium">Kafala</td>
                    <td>Financial System</td>
                    <td>2 hours ago</td>
                    <td>
                        <div class="flex items-center">
                            <div class="w-full flex-1">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 80%;"></div>
                                </div>
                            </div>
                            <span class="ml-2 text-sm">80%</span>
                        </div>
                    </td>
                    <td class="text-right">
                        <button class="btn">View</button>
                    </td>
                </tr>
                <tr>
                    <td class="font-medium">Embedded Supply Chain Financing</td>
                    <td>Financial System</td>
                    <td>5 hours ago</td>
                    <td>
                        <div class="flex items-center">
                            <div class="w-full flex-1">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 60%;"></div>
                                </div>
                            </div>
                            <span class="ml-2 text-sm">60%</span>
                        </div>
                    </td>
                    <td class="text-right">
                        <button class="btn">View</button>
                    </td>
                </tr>
                <tr>
                    <td class="font-medium">Auto Doc</td>
                    <td>Internal Tool</td>
                    <td>1 day ago</td>
                    <td>
                        <div class="flex items-center">
                            <div class="w-full flex-1">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 90%;"></div>
                                </div>
                            </div>
                            <span class="ml-2 text-sm">90%</span>
                        </div>
                    </td>
                    <td class="text-right">
                        <button class="btn">View</button>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Project Details</h2>
                    <p class="card-description">View and manage documentation for the selected project.</p>
                </div>
                <div class="card-content">
                    <form>
                        <div class="grid w-full items-center gap-4">
                            <div class="flex flex-col space-y-1.5">
                                <select id="project">
                                    <option value="">Select a project</option>
                                    <option value="kafala">Kafala</option>
                                    <option value="scf">Embedded Supply Chain Financing</option>
                                    <option value="autodoc">Auto Doc</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn" style="background-color: transparent; color: #3b82f6; border: 1px solid #3b82f6;">Cancel</button>
                    <button class="btn">View Documentation</button>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
