<h2>Setup instructions<h2>
<ol>
<li>Open command line inside the project</li>
<li>type command "composer install"</li>
<li>type command "cp .env.example .env"</li>
</li>type command "php artisan key:generate"</li>
<li>type command "php artisan migrate"</li>
<li>type command "php artisan db:seed --class=CategorySeeder"
<li>type command "php artisan serve" and make sure it is running on "http://127.0.0.1:8000"
</ol>
<h2>Environment configuration needed</h2>
<ul>
<li>if you want to set app api key insted of the default you shoukd add "API_KEY" to the env file</li>
<li>you have to enter your database info int the env file</li>
</ul>
<h2>API endpoints</h2>
<h4>getAllCategories endpoint</h4>
<p>GET http://127.0.0.1:8000/api/categories<p>
<p>Description : List all categories with pagination</p>
<p>Example : </p>
<p>
<p>Request</p>
Get /api/categories
Authorization: Bearer YOUR_API_KEY
Accept: application/json
{
    per_page:5  //the number of categories per page
}
</p>
<p>Response</p>
<p>
200 ok
[
    {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "name": "Personal Development",
                "color": "#FF5733",
                "icon_url": "https://fontawesome.com/icons/user?f=classic&s=solid",
                "image_filter": "grayscale",
                "image_seed_offset": "10",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 2,
                "name": "Health & Fitness",
                "color": "#FF1235",
                "icon_url": "https://fontawesome.com/icons/heart-pulse?f=classic&s=solid",
                "image_filter": null,
                "image_seed_offset": "10",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 3,
                "name": "Work & Productivity",
                "color": "#122888",
                "icon_url": "https://fontawesome.com/icons/briefcase?f=classic&s=solid",
                "image_filter": null,
                "image_seed_offset": "10",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 4,
                "name": "Education & Learning",
                "color": "#122444",
                "icon_url": "https://fontawesome.com/icons/book?f=classic&s=solid",
                "image_filter": null,
                "image_seed_offset": "10",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 5,
                "name": "Household & Maintenance",
                "color": "#552444",
                "icon_url": "https://fontawesome.com/icons/house?f=classic&s=solid",
                "image_filter": null,
                "image_seed_offset": "10",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 6,
                "name": "Finance & Budgeting",
                "color": "#00695C",
                "icon_url": "https://fontawesome.com/icons/wallet?f=classic&s=solid",
                "image_filter": null,
                "image_seed_offset": "12",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 7,
                "name": "Creativity & Hobbies",
                "color": "#8E44AD",
                "icon_url": "https://fontawesome.com/icons/palette?f=classic&s=solid",
                "image_filter": null,
                "image_seed_offset": "8",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 8,
                "name": "Social & Relationships",
                "color": "#2980B9",
                "icon_url": "https://fontawesome.com/icons/users?f=classic&s=solid",
                "image_filter": null,
                "image_seed_offset": "5",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 9,
                "name": "Travel & Errands",
                "color": "#D35400",
                "icon_url": "https://fontawesome.com/icons/car?f=classic&s=solid",
                "image_filter": null,
                "image_seed_offset": "15",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            },
            {
                "id": 10,
                "name": "Well-Being & Self-Care",
                "color": "#16A085",
                "icon_url": "https://fontawesome.com/icons/leaf?f=classic&s=solid",
                "image_filter": "Blur",
                "image_seed_offset": "7",
                "created_at": "2025-12-09T15:18:50.000000Z",
                "updated_at": "2025-12-09T15:18:50.000000Z"
            }
        ],
        "first_page_url": "http://127.0.0.1:8000/api/categories?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://127.0.0.1:8000/api/categories?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "page": null,
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/categories?page=1",
                "label": "1",
                "page": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "page": null,
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://127.0.0.1:8000/api/categories",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10,
        "total": 10
    }
]</p>

<h4>getCategory endpoint</h4>
<p>GET http://127.0.0.1:8000/api/categories/{id}<p>
<p>Description : Get single category</p>
<p>Example : </p>
<p>
<p>Request</p>
Get /api/categories/6
Authorization: Bearer YOUR_API_KEY
Accept: application/json
{
   
}
</p>
<p>Response</p>
<p>
200 ok
{
    "id": 6,
    "name": "Finance & Budgeting",
    "color": "#00695C",
    "icon_url": "https://fontawesome.com/icons/wallet?f=classic&s=solid",
    "image_filter": null,
    "image_seed_offset": "12",
    "created_at": "2025-12-09T15:18:50.000000Z",
    "updated_at": "2025-12-09T15:18:50.000000Z"
}<p>

<h4>getAllTasks endpoint</h4>
<p>GET http://127.0.0.1:8000/api/tasks<p>
<p>Description : List all tasks with filters and pagination</p>
<p>Example : </p>
<p>
<p>Request</p>
Get /api/categories
Authorization: Bearer YOUR_API_KEY
Accept: application/json
{
   priority:high  //filter by high priority
   category_id:3 //filter by category id =3
   completed:0  //filter by not completed
   sort:asc     //sorty by created at in ascending order
   per_page:5   //the number of tasks per page
}
</p>
<p>Response</p>
<p>
200 ok
[
    {
        "current_page": 1,
        "data": [],
        "first_page_url": "http://127.0.0.1:8000/api/tasks?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http://127.0.0.1:8000/api/tasks?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "page": null,
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/tasks?page=1",
                "label": "1",
                "page": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "page": null,
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://127.0.0.1:8000/api/tasks",
        "per_page": 5,
        "prev_page_url": null,
        "to": null,
        "total": 0
    }
]
</p>
<h4>getTask endpoint</h4>
<p>GET http://127.0.0.1:8000/api/tasks/{id}<p>
<p>Description : Get single task</p>
<p>Example : </p>
<p>
<p>Request</p>
Get /api/tasks/2
Authorization: Bearer YOUR_API_KEY
Accept: application/json
{

}
</p>
<p>Response</p>
<p>
200 ok
{
    "id": 2,
    "title": "run",
    "description": "jog for ten meters",
    "priority": "medium",
    "category_id": 3,
    "due_date": "2025-01-15",
    "completed": 1,
    "image_url": "https://picsum.photos/seed/10/400/300?",
    "created_at": "2025-12-09T15:48:17.000000Z",
    "updated_at": "2025-12-09T15:59:11.000000Z"
}
</p>

<h4>getAllCategories endpoint</h4>
<p>POSY http://127.0.0.1:8000/api/tasks<p>
<p>Description : Create new task</p>
<p>Example : </p>
<p>
<p>Request</p>
POST /api/tasks
Authorization: Bearer YOUR_API_KEY
Accept: application/json
{
    title:hjhfdhsf
    description:jog for ten meters
    priority:high
    category_id:5
    due_date:2025-01-15
    completed:0
    image_url:
}
</p>
<p>Response</p>
<p>
201 created
{
    "message": "Task created successfully"
}
</p>

<h4>updateTask endpoint</h4>
<p>PATCH http://127.0.0.1:8000/api/tasks<p>
<p>Description : Update existing task</p>
<p>Example : </p>
<p>
<p>Request</p>
PATCH /api/tasks
Authorization: Bearer YOUR_API_KEY
Accept: application/json
{
    title:hjhfdhsf   //you can add only the values you want to change to the request
    description:jog for ten meters
    priority:high
    category_id:5
    due_date:2025-01-15
    completed:0
    image_url:
}
</p>
<p>Response</p>
<p>
200 ok
{
    "message": "Task updated successfully"
}
</p>
<h4>deleteTask endpoint</h4>
<p>DELETE http://127.0.0.1:8000/api/tasks/{id}<p>
<p>Description : Delete task</p>
<p>Example : </p>
<p>
<p>Request</p>
DELETE /api/tasks/5
Authorization: Bearer YOUR_API_KEY
Accept: application/json
{

}
</p>
<p>Response</p>
<p>
204 no content
</p>