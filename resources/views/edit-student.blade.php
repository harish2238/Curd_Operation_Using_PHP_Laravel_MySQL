<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Student</title>
    <style media="screen">
      .edit_outer{
        border: solid orange 3px;
        padding-bottom: 10px;
      }
      .outer_edit{
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
    <div class="outer_edit">
      <div class="edit_outer">
        <div class="">
          <h2>Update Student</h2>
          <form class="" method="post" action="{{url('update-student')}}">
            @csrf
            <div class="">
              <input type="hidden" name="id" value="{{$data->id}}">
            </div><br>
            <div class="">
              <label for=""><strong>Name :  </strong></label>
              <input type="text" name="name" value="{{$data->name}}">
            </div><br>
            <div class="">
            <label for=""><strong>Email : </strong></label>
            <input type="text" name="email" value="{{$data->email}}">
          </div><br>
          <div class="">
            <label for=""><strong>Phone : </strong></label>
            <input type="text" name="phone" value="{{$data->phone}}">
          </div><br>
          <div class="">
            <label for=""><strong>Address</strong></label><br>
            <textarea name="address" rows="3" cols="80">{{$data->address}}</textarea>
          </div><br>
        <button type="submit" class="btn-primary">Update</button>
        <a href="/"> Back </a>
        </form>
        </div>

      </div>

    </div>
  </body>
</html>
