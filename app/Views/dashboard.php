<header class="py-4">
        <h1 class="text-center">Welcome To Task Management System</h1>
        <div class="text-center">
            <p>Manage your task efficiently and effectively</p>
            <a href="newtask" class="btn btn-primary">Add New Task</a>
        </div>
        
    </header>
<section class="container">
    <h2>Your Task</h2>

    
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Due date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tasks as $task): ?>
          <tr>
            <td><?= $task["title"]?></td>
            <td><?= $task["description"]?></td>
            <td><?= $task["due_date"]?></td>
            <td><?= $task["status"]?></td>
            <td>
                <a type="button" class="btn btn-warning" href="/update/<?= $task["id"]?>">Update</a>
                <button type="button text-light" class="btn btn-danger" href="/delete/<?= $task["id"]?>">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>