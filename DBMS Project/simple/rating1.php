<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Star Rating Form | CodingNepal</title> -->
    <link rel="stylesheet" href="st.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>

<body>
  <form action = sample.php method = 'post'>
    <div class="container">
        <div class="post">
            <div class="text">
                Thanks for rating us!</div>
            <div class="edit">
                EDIT</div>
        </div>
        <div class="star-widget">
            <input type="radio" name="rate" id="rate-5">
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1">
            <label for="rate-1" class="fas fa-star"></label>

                <header></header>
                <div class="textarea">
                    <textarea cols="30" placeholder="Describe your experience.."></textarea>
                    <!-- Due to more textarea tags I got a problem So I've changed the textarea tag to textare. Please correct it. -->

                    <br />






                </div>
                <div class='w'>
                <label for="type">Choose type</label>
                    <select name="day_time" id="type">
                      <option value="breakfast">breakfast</option>
                      <option value="lunch">lunch</option>
                      <option value="snacks">snacks</option>
                      <option value="dinner">dinner</option>
                    </select>
                </div>
                <div class="gh">
                    <button class="btn">POST</button>
                </div>

            </form>


        </div>
</body>

</html>
