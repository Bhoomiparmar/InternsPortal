<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  @if(\Session::has('success'))
    <div class="alert">
        <h4>
            {{ \Session::get('success')}}
        </h4>
    </div>
    @endif

<!-- start Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action="/add_data" method="POST" enctype="multipart/form-data">
     
        {{ csrf_field() }}

      <div class="modal-body">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" name="fullname" placeholder="Enter your full-name">
              </div>

              <div class="form-group">
                <label>Gender</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
                </div>
              </div>

              <div class="Form-group">
              <label>Age</label>
              <input type="number" class="form-control" name="age" placeholder="enter your age">
              </div>

              <label for="birthday">Date Of Birth</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                  </span>
                  <input data-datepicker="" class="form-control" id="birthday" type="text" name="dob" placeholder="dd/mm/yyyy" required>
              </div>


              <div class="Form-group">
              <label>Contact Number</label>
              <input type="number" class="form-control" name="contactno" placeholder="enter your phone-number">
              </div>

              <div class="Form-group">
              <label>Email-id</label>
              <input type="text" class="form-control" name="email" placeholder="enter your Email-id">
              </div>

              <div class="Form-group">
              <label>College name</label>
              <input type="text" class="form-control" name="collegename" placeholder="enter your College name">
              </div>
                  
              <div class="form-group">
              <label for="formFile" class="form-label">Upload Resume(.pdf only)</label>
              <input class="form-control" type="file" name="file" id="formFile">
              </div>
      
              <div class="modal-footer">
                <button type="button" name="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
 
    </div>
  </div>
</div>

{{-- end model --}}

    <div class="card text-center text-dark bg-light mb-3 border-primary ">
        <div class="card-header">
          <h2 class="text-primary">Dotminds LLP</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">We are DotMinds a team of Developers, Designers and Marketers who believe in giving more than 100% to establish trust and converting trust into long term relationship with you. We are looking for interns who are enthusiastic and passionate for learning and implementing the same to work as full time interns.
        </h5><br/>
        <h5>Front End Developer</h5>
          
         
          <div class="list-group card-text mx-auto" style="width:250px;">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              Key Responsibilities
            </a>
            <a href="#" class="list-group-item list-group-item-action">Build pixel-perfect</a>
            <a href="#" class="list-group-item list-group-item-action">smooth UIs across both mobile platforms</a>
            <a href="#" class="list-group-item list-group-item-action"> Proficient in JavaScript, CSS, HTML5, Bootstrap.</a>
          </div><br/>

            <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Apply Now
          </button>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
        </div>


          
      

<script>
    var datepickers = [].slice.call(document.querySelectorAll('[data-datepicker]'))
var datepickersList = datepickers.map(function (el) {
    return new Datepicker(el, {
        buttonClass: 'btn'
    });
});
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="@@path/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>



</body>
</html>