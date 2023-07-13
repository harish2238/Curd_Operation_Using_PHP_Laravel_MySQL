<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <style media="screen">
      .add_outer{
        border: solid orange 3px;
        padding-bottom: 10px;
      }
      .outer_add{
        padding-top: 10%;
        text-align: center;
        padding-left: 25%;
        padding-right: 25%;
      }
      button{
        color: white;
        background-color: blue;
        border-radius: 5px;
        padding: 5px;
      }
      a{
        color: white;
        border-radius: 5px;
        background-color: black;
        text-decoration: none;
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <div class="outer_add">
      <div class="add_outer">
        <div class="">
          <h2>Add Student</h2>
        </div>

          <form class="" method="post" action="{{url('save-student')}}">
            @csrf
            <div class="">
              <label for=""><strong>Name :  </strong></label>
              <input type="text" name="name" placeholder="Enter Name">
            </div><br>
            <div class="">
            <label for=""> <strong>Email : </strong></label>
            <input type="text" name="email" placeholder="Enter Email">
          </div><br>
          <div class="">
            <label for=""><strong>Phone :  </strong</label>
            <input type="text" name="phone" placeholder="Enter Phone">
          </div><br>
          <div class="">
            <label for=""><strong>Address</strong></label><br>
            <textarea name="address" rows="3" cols="80" placeholder="Enter Address"></textarea>
          </div><br>
        <button type="submit" class="btn-primary">Save</button>
        <a href="/"> Back </a>
        </form>

      </div>
    </div>

  </body>
</html>
