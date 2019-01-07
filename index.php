<?php
require_once('ui/header.php');
?>
  <link rel="stylesheet" href="assets/styles/navbar.css">
    <title>Home</title>
</head>
<body>
<?php
include('ui/navigation.php');
?>

<main role="main" class="container">
              <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-green rounded shadow-sm">
                    <img class="mr-3" src="{% static 'images/logow.png' %}" alt="" width="48" height="48">
                    <div class="lh-100">
                      <h6 class="mb-0 text-white lh-100">iNGage</h6>
                      <small></small>
                      
                    </div>
                  </div>
                  <div class="card">
                      <h5 class="card-header">Featured</h5>
                      <div class="card-body">
                        <h5 class="card-title">About Us</h5>
                        <p class="card-text">iTRaveler is a mobile game which helps to reduce the environmental pollution. It also acts as a trip organizer. It gathers environmental information such as humidity,light,air,water and soil moisture values and photographs on particular locations and throught the app predicted values can be taken. Those predictions and original values will send to environmentalists to analyze and make desicions.</p>
                        <a href="https://github.com/chiCKson/iTRaveler" class="btn btn-success">Download</a>
                      </div>
                    </div>
                </main>
<?php
include('ui/footer.php');
?>

</body>
</html>