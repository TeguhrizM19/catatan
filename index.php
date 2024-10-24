<!-- Validasi create -->
$validated = $request->validate([
'title' => 'required|unique:posts|max:255',
'body' => 'required',
]);

<!-- untuk create -->
$varible = new Model;
<!-- untuk update -->
$varible = new Model::find($id);
<!-- dimasukkan ke DB -->
$varible->title"DB" = $request->input('namaBarang')"name";
$varible->body"DB" = $request->input('body')"name";

$varible->save();
return redirect('/...');
-------------------------------------------------------------------------
<!-- memberi alert -->
return back()->with('pesan', 'isi pesan');
return redirect('/...')->with('pesan', 'isi pesan');

@if(session()->has('pesan'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('pesan') }}
</div>
@endif