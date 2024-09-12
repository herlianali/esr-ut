<form action="{{ route('testUpload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="foto_profile">
    <input type="file" name="profile_foto">
    <button type="submit">Submit</button>
</form>