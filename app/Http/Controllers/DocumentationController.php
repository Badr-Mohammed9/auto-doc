<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use App\Models\Project;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function getDoc(Request $request, Project $project) {
        $sections = [
            [
                'name' => 'Architecture Overview',
                'subsections' => [
                    [
                        'name' => 'Overview',
                        'content' => [
                            ['title' => 'Overview', 'description' => 'This documentation provides an overview of the MVC architecture used in our application, detailing the interaction between Models, Views, and Controllers.', 'code' => ''],
                        ],
                        'uml' => [
                            ['title' => 'UML Overview', 'description' => 'A UML diagram depicting the MVC architecture.', 'code' => ''],
                        ],
                        'relationships' => [
                            ['title' => 'Architecture Relationships', 'description' => 'This section explains how the MVC components interact with each other.', 'code' => ''],
                        ],
                    ],
                    [
                        'name' => 'Components',
                        'content' => [
                            ['title' => 'Main Components', 'description' => 'Overview of the main components in the architecture: Models, Views, and Controllers.', 'code' => ''],
                        ],
                        'uml' => [
                            ['title' => 'UML of Components', 'description' => 'UML diagram illustrating the relationships between different components.', 'code' => ''],
                        ],
                        'relationships' => [
                            ['title' => 'Component Relationships', 'description' => 'Explains how components interact within the MVC architecture.', 'code' => ''],
                        ],
                    ],
                ]
            ],
            [
                'name' => 'Routes',
                'subsections' => [
                    [
                        'name' => 'Route Definitions',
                        'content' => [
                            ['title' => 'Web Routes', 'description' => 'Definitions of web routes that handle user requests.', 'code' => 'Route::get("/users", [UserController::class, "index"]);'],
                            ['title' => 'API Routes', 'description' => 'Definitions of API routes for accessing resources.', 'code' => 'Route::apiResource("products", ProductController::class);'],
                        ],
                        'uml' => [
                            ['title' => 'UML of Route Definitions', 'description' => 'A UML diagram showing how routes connect to controllers.', 'code' => ''],
                        ],
                        'relationships' => [
                            ['title' => 'Route Relationships', 'description' => 'This section describes how routes relate to controllers and models.', 'code' => ''],
                        ],
                    ],
                    [
                        'name' => 'Route Middleware',
                        'content' => [
                            ['title' => 'Middleware Overview', 'description' => 'An overview of middleware used for authentication and authorization.', 'code' => ''],
                            ['title' => 'Example Middleware', 'description' => 'An example of a middleware that checks user roles.', 'code' => 'public function handle($request, Closure $next, $role) {...}'],
                        ],
                        'uml' => [
                            ['title' => 'UML of Middleware', 'description' => 'A UML diagram showing how middleware interacts with routes.', 'code' => ''],
                        ],
                        'relationships' => [
                            ['title' => 'Middleware Relationships', 'description' => 'Describes how middleware is applied to routes and controllers.', 'code' => ''],
                        ],
                    ],
                ]
            ],
            [
                'name' => 'Controllers',
                'subsections' => [
                    [
                        'name' => 'UserController',
                        'content' => [
                            ['title' => 'Index Method', 'description' => 'Displays a list of users.', 'code' => 'public function index() {...}'],
                            ['title' => 'Show Method', 'description' => 'Displays a specific user.', 'code' => 'public function show($id) {...}'],
                        ],
                        'uml' => [
                            ['title' => 'UML of UserController', 'description' => 'UML diagram showing the UserController interactions.', 'code' => ''],
                        ],
                        'relationships' => [
                            ['title' => 'User Relationships', 'description' => 'Relationships between UserController and User model, and User views.', 'code' => ''],
                        ],
                    ],
                    [
                        'name' => 'ProductController',
                        'content' => [
                            ['title' => 'Store Method', 'description' => 'Stores a new product.', 'code' => 'public function store(Request $request) {...}'],
                            ['title' => 'Update Method', 'description' => 'Updates an existing product.', 'code' => 'public function update(Request $request, $id) {...}'],
                        ],
                        'uml' => [
                            ['title' => 'UML of ProductController', 'description' => 'UML diagram for ProductController operations.', 'code' => ''],
                        ],
                        'relationships' => [
                            ['title' => 'Product Relationships', 'description' => 'Explains relationships with Product model and related views.', 'code' => ''],
                        ],
                    ],
                ]
            ],
            [
                'name' => 'Models',
                'subsections' => [
                    [
                        'name' => 'User Model',
                        'content' => [
                            ['title' => 'User Attributes', 'description' => 'Overview of attributes for the User model.', 'code' => 'protected $fillable = ["name", "email", "password"];'],
                            ['title' => 'User Methods', 'description' => 'Common methods used in the User model.', 'code' => 'public function posts() {...}'],
                        ],
                        'uml' => [
                            ['title' => 'UML of User Model', 'description' => 'UML diagram showing the User model structure and relationships.', 'code' => ''],
                        ],
                        'relationships' => [
                            ['title' => 'User Relationships', 'description' => 'How the User model relates to other models (e.g., Post, Comment).', 'code' => ''],
                        ],
                    ],
                    [
                        'name' => 'Product Model',
                        'content' => [
                            ['title' => 'Product Attributes', 'description' => 'Overview of attributes for the Product model.', 'code' => 'protected $fillable = ["name", "price", "description"];'],
                            ['title' => 'Product Methods', 'description' => 'Common methods in the Product model.', 'code' => 'public function category() {...}'],
                        ],
                        'uml' => [
                            ['title' => 'UML of Product Model', 'description' => 'UML diagram illustrating the Product model.', 'code' => ''],
                        ],
                        'relationships' => [
                            ['title' => 'Product Relationships', 'description' => 'Describes relationships with other models (e.g., Category, Order).', 'code' => ''],
                        ],
                    ],
                ]
            ],
        ];
        
    
        $tabs = [
            ['id' => 'content', 'name' => 'Content'],
            ['id' => 'relationships', 'name' => 'Relationships'],
            ['id' => 'uml', 'name' => 'UML Diagrams']
        ];
    
        $tabContents = [
            'content' => [
                'id' => 'content',
                'sections' => array_map(function ($section) {
                    return [
                        'title' => $section['name'],
                        'subsections' => array_map(function ($subsection) {
                            return [
                                'title' => $subsection['name'],
                                'content' => $subsection['content'],
                            ];
                        }, $section['subsections'])
                    ];
                }, $sections)
            ],
            'relationships' => [
                'id' => 'relationships',
                'sections' => array_map(function ($section) {
                    return [
                        'title' => $section['name'],
                        'subsections' => array_map(function ($subsection) {
                            return [
                                'title' => $subsection['name'],
                                'relationships' => $subsection['relationships'],
                            ];
                        }, $section['subsections'])
                    ];
                }, $sections)
            ],
            'uml' => [
                'id' => 'uml',
                'sections' => array_map(function ($section) {
                    return [
                        'title' => $section['name'],
                        'subsections' => array_map(function ($subsection) {
                            return [
                                'title' => $subsection['name'],
                                'uml' => $subsection['uml'],
                            ];
                        }, $section['subsections'])
                    ];
                }, $sections)
            ]
        ];
    
        $projectTitle = $project->title;
        $projectDescription = $project->description;
        $onThisPageSections = array_map(fn($section) => $section['name'], $sections);
    
        return view('documentation', compact('sections', 'tabs', 'tabContents', 'projectTitle', 'projectDescription', 'onThisPageSections'));
    }
    
    
    
}
