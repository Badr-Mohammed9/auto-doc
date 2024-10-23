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
                    ['name' => 'Overview', 'description' => 'An overview of the architecture...', 'code' => ''],
                    ['name' => 'Components', 'description' => 'Description of components...', 'code' => ''],
                ]
            ],
            [
                'name' => 'Core Components',
                'subsections' => [
                    ['name' => 'Main Component', 'description' => 'Details about the main component...', 'code' => ''],
                    ['name' => 'Secondary Component', 'description' => 'Details about the secondary component...', 'code' => ''],
                ]
            ],
            [
                'name' => 'Data Flow',
                'subsections' => [
                    ['name' => 'Input Flow', 'description' => 'Description of input flow...', 'code' => ''],
                    ['name' => 'Output Flow', 'description' => 'Description of output flow...', 'code' => ''],
                ]
            ]
        ];
        
    
        $tabs = [
            ['id' => 'content', 'name' => 'Content'],
            ['id' => 'relationships', 'name' => 'Relationships'],
            ['id' => 'uml', 'name' => 'UML Diagrams']
        ];
    
        $tabContents = [
            'content' => [
                'id' => 'content',
                'sections' => [
                    ['title' => 'Installation', 'description' => 'To install...', 'code' => 'npm install auto-doc'],
                    ['title' => 'Configuration', 'description' => 'Configure Auto...', 'code' => '// config file code']
                ]
            ],
            'relationships' => [
                'id' => 'relationships',
                'sections' => [
                    ['title' => 'Relationship to User model', 'description' => 'One-to-Many relation...', 'code' => '']
                ]
            ],
            'uml' => [
                'id' => 'uml',
                'sections' => [
                    ['title' => 'System Architecture', 'description' => 'Overview of the system architecture...', 'code' => '']
                ]
            ]
        ];
    
        $projectTitle ='$project->title'; // Assuming the Project model has a title attribute
        $projectDescription = "$project->description"; // Assuming the Project model has a description attribute
        $onThisPageSections = array_map(fn($section) => $section['name'], $sections);
    
        return view('documentation', compact('sections', 'tabs', 'tabContents', 'projectTitle', 'projectDescription', 'onThisPageSections'));
    }
    
}
