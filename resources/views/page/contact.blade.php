@include('layouts.app')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 mb-5">
      <div class="card">
        <div class="card-header text-center">
          <h3><b>Our Detail</b></h3>
        </div>

        <div class="card-body">
          <ol class="list-group">
            <li class="list-group-item list-group-item-primary"><i style="font-size: 12px; color:green;"
                class="icofont-address-book"><span style="color: black"> Location: Mirpur 6</span></i></li>
            <li class="list-group-item list-group-item-success"><i style="font-size: 12px; color:gray;"
                class="icofont-ui-contact-list"><span style="color: black"> Phone: 015 33 92 39 62</span></i></li>
            <li class="list-group-item list-group-item-primary"><i style="font-size: 12px; color:red;"
                class="icofont-email"><span style="color: black"> Mail: shuvoafjal@gmail.com</span></i></li>
          </ol>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-5">
      <div class="card">
        <div class="card-header text-center">
          <h3><b>Find Us</b></h3>
        </div>
        <div class="card-body ">
          <div class="d-flex align-items-stretch">
            <iframe src="https://maps.google.com/maps?q=mirpur%201&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center">
          <h3><b>Who we are !!!</b></h3>
        </div>
        <img class="rounded mx-auto d-block imgShadow" src="{{url('/welcome3.png')}}" alt="" width="200" height="200"
          style="padding: 2ch">
        <div class="card-body">
          <p style="background-color:greenyellow" class="card-text">We are Home Soft Software Company Ltd. We develop
            for
            your dream will comes true.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-5">
      <div class="card">
        <div class="card-header text-center">
          <h3><b>Mail Us</b></h3>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Name" required>
              {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                else.</small> --}}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                else.</small>
            </div>
            {{-- <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div> --}}
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="Share your opinion"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>