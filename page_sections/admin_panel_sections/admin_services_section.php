<div id="admin-new-service">
  
    <div id="left">
    
    <h3 class="total-admin-badge">Services <span class="badge badge-light"> 10</span> Total  </h3>

    </div>

    <div id="right">
    
    <a href="#" class="btn btn-primary btn-lg active admin-add-new-service-btn" role="button" aria-pressed="true"  data-toggle="modal" data-target="#exampleModalLong"> + Add New Service </a>
    </div>




<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input class="form-control" type="text" placeholder="Service Name">
       <br>
      <select class="form-control">
      <option value="" disabled selected>Select Category</option>
      <option value="one">Category one</option>
      <option value="two">Category Two</option>
      </select>

      <br>

      <input class="form-control" type="number" placeholder="Cost">


      <br>
      <select multiple class="form-control" id="exampleFormControlSelect1" >
                <option value="" disabled selected>Select Doctor--Use (CTRL or command) + Left click</option>
                <option value="one">Doctor One</option>
                <option value="two">Doctor Two</option>
                                                </select>

      <br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" disabled>Delete</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>







  </div>

  <div class="container admin-service-category" >
      <hr>
  <div class="row">
    <div class="col-sm-4">

    <h4>Categories</h4>
      
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Category one</h5>
    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil" aria-hidden="true" ></i></a>
    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
  </div>


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Create New Category
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input class="form-control" type="text" placeholder="Category Name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

</div>

    </div>
    <div class="col-sm-8">
   
    <h4>All Services</h4>
    <div class="card">
        <div class="card-body">
  <div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>SERVICE NAME</td>
                                        <td>CATEGORY</td>
                                        <td>COST</td>
                                        <td>ASSIGNED TO</td>
                                        <td></td>
                                    </tr>
                                </thead>
                      
                                <tbody>
                                    <tr>
                                        <td>SERVICE ONE</td>
                                        <td>CATEGORY ONE</td>
                                        <td>$60</td>
                                        <td>DOCTOR ONE</td>
                                        <td> 
                                        <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

</div>
</div>


</div>
   
  </div>
</div>

    </div>
  </div>
</div


