@include('inc.header')
<div class="container">
<div class="row">
    <div class="col-md-6">
    <form class="form-horizontal" method="post" action="/insert">
        {{csrf_field()}}
  <fieldset>
    <legend>laravel curd</legend>
    @foreach ($errors->all() as $error)
                <div class=" alert alert-danger">{{ $error }}</div>
            @endforeach
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">title</label>
      <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Description</label>
      <!-- <input type="text" class="form-control" id="description" placeholder="description"> -->
      <textarea class="form-control" name="description" placeholder="textarea" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/home" class="btn btn-primary">Back</a>
  </fieldset>
</form>
    </div>
</div>
</div>
