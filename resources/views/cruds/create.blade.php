@include('cruds.header')
<form action="{{ route('cruds.store') }}" id="crudes" method="post">
  {{ csrf_field() }}
  <label>Nama:</label>
  <input type="text" id="nama" name="nama" placeholder="your name">
  <label>Email:</label>
  <input type="email" id="email" name="email" placeholder="ok@google.com">
  <label>DOB:</label>
  <input type="date" id="date_of_birth" name="date_of_birth">
  <label>Alamat:</label>
  <input type="text" id="alamat" name="alamat" placeholder="go street #321">
  <button type="submit" id="submit">Submit</button>
  <button type="reset">Reset</button>
</form>

@include('cruds.footer')