<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<section class="container my-5 py-5">
 <form action="{{route('home')}}" method="GET">
     <button type="submit" onchange="getData" >Submit</button>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3 mb-2 mb-md-0">
      <select class="form-control form-control-sm" style="border: 1px solid #ef5705;">
        <option selected disabled>Select category</option>
        <option name="categories" value="category">Category 1</option>
        <option>Category 2</option>
      </select>
    </div>
    <div class="col-12 col-sm-6 col-md-3 mb-2 mb-md-0">
      <select class="form-control form-control-sm" style="border: 1px solid #ef5705;">
        <option selected disabled>Search sub category</option>
        <option>Category 1</option>
        <option>Category 2</option>
      </select>
    </div>
    <div class="col-12 col-sm-6 col-md-3 mb-2 mb-sm-0">
      <input type="text" class=" form-control-sm form-control" placeholder="Start Date - End Date" style="border: 1px solid #ef5705;">
    </div>
    <div class="col-12 col-sm-6 col-md-3 mb-2 mb-sm-0">
      <input type="text" class=" form-control-sm form-control" placeholder="Max Number of guests" style="border: 1px solid #ef5705;">
    </div>
  </div>
 </form>
  <div class="text-center mt-3">
    <button class="btn text-white rounded-lg" style="background-color: #ef5705; width: 120px;border-radius: 10px !important;">Clear</button>
  </div>
  
  <div class="container">
      <table>
          <th>
              Name 

          </th>
          <th>
              Description
          </th>
          @foreach($posts as $post)
          <tr>
          <td> {{$post->name}}</td>        
          <td>
             {{$post->description}}
          </td>

          </tr>
          @endforeach
      </table>
  </div>
</section>

<script type="text/javascript"> 

function getDATA() {
    var apiUrl = 'http://127.0.0.1:8000/api/search/posts'; const options = { method: 'POST', body: {"categories":[],"no_of_guests":'',"available_dates":[]}, headers: { 'Content-Type': 'application/json' } } 
let allData = []; 
fetch(apiUrl).then(response => { return response.json(); }).then(data => { console.log(data) }).catch(err => { // Do something for an error here }); 
}
</script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>


