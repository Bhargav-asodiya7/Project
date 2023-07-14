<!DOCTYPE html>
<html>
<head>
  <title>Feedback Form</title>
  <link rel="stylesheet" href="feedback.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/fontawesome-stars.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <script src="star-rating.js" type="text/javascript"></script>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
  <script type="text/javascript">
    $(document).ready(function(){
$("#stars-default").rating('create',
           {
                coloron: 'red',
                onClick: function () {
                   alert('rating is ' + this.attr('data-rating'));
       
                }
            });
        });
</script>
</head>
<body>
  <h1>Feedback Form</h1>
<div id="fm">
  <form id="feedbackForm" action="db.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="feedback">Comment:</label>
    <textarea id="feedback" name="feedback" required></textarea><br><br>

    <label for="rating">Rating:</label>
    <div class="rating-container">
      <div id="stars-default">
        <input type="hidden" value="1" name="rating"/>
      </div>
    </div><br>

    <input type="submit" value="Submit">
  </form>

  
</div>
</body>
</html>
