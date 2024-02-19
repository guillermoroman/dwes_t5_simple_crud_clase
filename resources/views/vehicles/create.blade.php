<h1>Add new vehicle</h1>
<form action="{{route('vehicles.store')}}" method = "POST" enctype="multipart/form-data">
    {{--enctype="multipart/form-data"  necesario para gestionar subidas de archivos--}}
    @csrf
    <label for="make">Make</label>
    <input type="text" class="form-control" id="make" name="make" required>
    <label for="model">Model</label>
    <input type="text" class="form-control" id="model" name="model" required>
    <label for="cv">CV</label>
    <input type="text" class="form-control" id="cv" name="cv" required>
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" required>
    <label for="foto">Photo</label>
    <input type="file" class="form-control-file" id="foto" name="foto">
    {{--eliminar required para 'foto' ya que lo había marcado como opcional--}}
    <button type="submit" class="btn btn-primary">Add Vehicle</button>
</form>
