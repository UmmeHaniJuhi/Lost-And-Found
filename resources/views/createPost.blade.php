<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="submitModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Do you want save changes?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <main>
    
    <div class="row g-3 my-4">
        <div class="col-md-6 col-lg-6">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Lost Item:</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                          
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://source.unsplash.com/610x400/?nature,tech" alt="Image Front 1" class="d-block w-100">
                              </div>
                              <div class="carousel-item">
                                <img src="https://source.unsplash.com/610x400/?nature,tech" alt="Image Front 2" class="d-block w-100">
                              </div>
                              <div class="carousel-item">
                                <img src="https://source.unsplash.com/610x400/?nature,tech" alt="Image Back 3" class="d-block w-100">
                              </div>
                              <div class="carousel-item">
                                <img src="https://source.unsplash.com/610x400/?nature,tech" alt="Image Back 4" class="d-block w-100">
                              </div>
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>

                        <!-- <img src="https://source.unsplash.com/610x400/?nature,tech" alt=""> -->
                    </div>
                </li>
                
            </ul>

        </div>
        <div class="col-md-6 col-lg-6 order-md-last">
            <h4 class="mb-3">Item Details:</h4>
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="itemName" class="form-label">Item Name:</label>
                        <input type="text" class="form-control" id="ItemName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Invalid-feedback
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="state" class="form-label">Catagory</label>
                        <select class="form-select" id="state" required="">
                            <option value="">-Select-</option>
                            <option>2</option>
                        </select>
                        <div class="invalid-feedback">
                            Invalid feedback
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="state" class="form-label">Division</label>
                        <select class="form-select" id="state" required="">
                            <option value="">-Select-</option>
                            <option>2</option>
                        </select>
                        <div class="invalid-feedback">
                            Invalid feedback
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <label for="state" class="form-label">Data Lost/Found</label>
                        <select class="form-select" id="state" required="">
                            <option value="">-Select-</option>
                            <option>2</option>
                        </select>
                        <div class="invalid-feedback">
                            Invalid feedback
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" class="form-control" id="location" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Invalid-feedback
                        </div>
                    </div>
                    <div class="col-12 form-floating">
                            <label for="firstName" class="form-label">Discription:</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            
                          
                    </div>
                    <div class="col-12">
                        <label for="PhoneNumber" class="form-label">Phone Number:</label>
                        <input type="text" class="form-control" id="PhoneNumber" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Invalid-feedback
                        </div>
                    </div>





                <hr class="my-4">

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Show your email</label>
                </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#submitModal">
    Create/Save Post
  </button>
  
             
            </form>
        </div>
    </div>
</main>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
</body>

</html>