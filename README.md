<h2>Setup instructions<h2>
<ol>
<li>Open command line inside the project</li>
<li>type command "composer install"</li>
<li>type command "cp .env.example .env"</li>
<li>type command "php artisan key:generate"</li>
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
<p>GET http://127.0.0.1:8000/api/categories</p>
<p>Description : List all categories with pagination</p>
<p>Example :</p>

<p>Request</p>
<p>GET /api/categories</p>
<p>Authorization: Bearer YOUR_API_KEY</p>
<p>Accept: application/json</p>
<p>```{ per_page:5 }```</p>

<p>Response</p>
<p>200 ok</p>
<p>
```
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
        "next_page_url": null,
        "per_page": 10,
        "total": 10
    }
]
```
</p>

<h4>getCategory endpoint</h4>
<p>GET http://127.0.0.1:8000/api/categories/{id}</p>
<p>Description : Get single category</p>

<p>Request</p>
<p>GET /api/categories/6</p>
<p>Authorization: Bearer YOUR_API_KEY</p>
<p>Accept: application/json</p>

<p>Response</p>
<p>200 ok</p>
<p>
```
{
    "id": 6,
    "name": "Finance & Budgeting",
    "color": "#00695C",
    "icon_url": "https://fontawesome.com/icons/wallet?f=classic&s=solid",
    "image_filter": null,
    "image_seed_offset": "12",
    "created_at": "2025-12-09T15:18:50.000000Z",
    "updated_at": "2025-12-09T15:18:50.000000Z"
}
```
</p>


<h4>getAllTasks endpoint</h4>
<p>GET http://127.0.0.1:8000/api/tasks</p>
<p>Description : List all tasks with filters and pagination</p>

<p>Request</p>
<p>GET /api/tasks</p>
<p>Authorization: Bearer YOUR_API_KEY</p>
<p>Accept: application/json</p>
<p>```{
   priority:high,
   category_id:3,
   completed:0,
   sort:asc,
   per_page:5
}```</p>

<p>Response</p>
<p>200 ok</p>
<p>
```
[
    {
        "current_page": 1,
        "data": [],
        "first_page_url": "http://127.0.0.1:8000/api/tasks?page=1",
        "last_page": 1,
        "per_page": 5,
        "total": 0
    }
]
```
</p>


<h4>getTask endpoint</h4>
<p>GET http://127.0.0.1:8000/api/tasks/{id}</p>
<p>Description : Get single task</p>

<p>Request</p>
<p>GET /api/tasks/2</p>
<p>Authorization: Bearer YOUR_API_KEY</p>
<p>Accept: application/json</p>

<p>Response</p>
<p>200 ok</p>
<p>
```
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
```
</p>


<h4>createTask endpoint</h4>
<p>POST http://127.0.0.1:8000/api/tasks</p>
<p>Description : Create new task</p>

<p>Request</p>
<p>POST /api/tasks</p>
<p>Authorization: Bearer YOUR_API_KEY</p>
<p>Accept: application/json</p>
<p>```{
    title:hjhfdhsf,
    description:jog for ten meters,
    priority:high,
    category_id:5,
    due_date:2025-01-15,
    completed:0,
    image_url:
}```</p>

<p>Response</p>
<p>201 created</p>
<p>{ "message": "Task created successfully" }</p>


<h4>updateTask endpoint</h4>
<p>PATCH http://127.0.0.1:8000/api/tasks/{id}</p>
<p>Description : Update existing task</p>

<p>Request</p>
<p>PATCH /api/tasks/2</p>
<p>Authorization: Bearer YOUR_API_KEY</p>
<p>Accept: application/json</p>
<p>```{
    title:new title,
    description:jog for ten meters,
    priority:high,
    category_id:5,
    due_date:2025-01-15,
    completed:0
}```</p>

<p>Response</p>
<p>200 ok</p>
<p>{ "message": "Task updated successfully" }</p>


<h4>deleteTask endpoint</h4>
<p>DELETE http://127.0.0.1:8000/api/tasks/{id}</p>
<p>Description : Delete task</p>

<p>Request</p>
<p>DELETE /api/tasks/5</p>
<p>Authorization: Bearer YOUR_API_KEY</p>
<p>Accept: application/json</p>

<p>Response</p>
<p>204 no content</p>
