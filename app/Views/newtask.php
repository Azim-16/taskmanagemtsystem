<header class="mt-5 py-2">
        <div class="container">
        <h1 class="text-start">Add New Tasks</h1>
    </div>
      </header>

      <section>
        <div class="container card mt-5">
        <h3>Task Details</h3>
        <p>Please Enter the details of the task you want to add</p>
        
        
            <form class="mt-5 ps-2" method="post" action="/add">
                <div class="form-group row mb-3">
                  <label for="inputtask" class="col-sm-2 col-form-label">Task</label>
                  <div class="col-sm-10">
                    <input type="task" class="form-control" name="title">
                  </div>
                </div>

                <div class="form-group row mb-3">
                  <label for="inputdescription" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="description" class="form-control" name="description">
                  </div>
                  </div>
                  
                  <div class="form-group row mb-3">
                    <label for="inputtask" class="col-sm-2 col-form-label">Due date</label>
                    <div class="col-sm-10">
                      <input type="datetime-local" class="form-control" name="duedate">
                    </div>
                  </div>
            <div class="d-grid gap-2 py-2">
                <button type="submit" class="btn btn-primary">Add Task</button>
                </div>
            
            </form>   
                 </div>
        
      </section>
