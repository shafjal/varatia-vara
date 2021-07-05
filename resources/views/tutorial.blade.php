@include('layouts.app')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-10 col-12">
          <div class="card">
              <div class="card-header text-center"><h3><b>Video Tutorial</b></h3></div>
              <div class="card-body">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nRrD46ExEzs?rel=0" allowfullscreen></iframe>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-12 col-12 mt-5">
        <div class="card">
            <div class="card-header text-center"><h3><b>Tutorial</b></h3></div>
            <div class="card-body text-center">
              <ol class="list-group">
                <li class="list-group-item list-group-item-primary"><h5>Upcoming / আসন্ন</h5></li>
                <li class="list-group-item list-group-item-success"><h5>Please Be patient / দয়া করে ধৈর্য ধরুন </h5></li>
                <li class="list-group-item list-group-item-primary"><h5>Upcoming / আসন্ন</h5></li>
                <li class="list-group-item list-group-item-success"><h5>Please Be patient / দয়া করে ধৈর্য ধরুন </h5></li>
                <li class="list-group-item list-group-item-primary"><h5>Upcoming / আসন্ন</h5></li>
                <li class="list-group-item list-group-item-success"><h5>Please Be patient / দয়া করে ধৈর্য ধরুন </h5></li>
                <li class="list-group-item list-group-item-primary"><h5>Upcoming / আসন্ন</h5></li>
                <li class="list-group-item list-group-item-success"><h5>Please Be patient / দয়া করে ধৈর্য ধরুন </h5></li>
              </ol>
            </div>
        </div>
    </div>
      <div class="col-md-12 col-12 mt-5">
        <div class="card">
            <div class="card-header text-center"><h3><b> Download PDF</b></h3></div>
            <div class="card-body text-center">
              <a  href="{{url('/pdf/tutorial.pdf')}}">
                <span style="font-size: 48px; color: rgb(156, 31, 9);">
                    <i class="fas fa-file-pdf"></i>
                  </span>
            </a>
            <p>Tutorial</p>
            </div>
        </div>
    </div>
  </div>
</div>
