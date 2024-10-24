<!-- Validasi create -->
$validated = $request->validate([
'title' => 'required|unique:posts|max:255',
'body' => 'required',
'image' => 'required|mimes:jpg,jpeg,png|max:2048' //<- jika perlu gambar
  ]);

  <!-- Untuk Create Gambar (Jika Perlu) -->
  <!-- mengubah naman file jadi unique -->
  $newNameImage = time() . '.' . $request->image->extension();
  <!-- tempat penyimpanan image -->
  $request->image->move(public_path('uploads'), $newNameImage);

  <!-- untuk create -->
  $varible = new Model;

  <!-- dimasukkan ke DB -->
  $varible->title"DB" = $request->input('namaBarang')"name";
  $varible->body"DB" = $request->input('body')"name";
  $varible->image"DB" = $newNameImage; //<- jika perlu gambar

    $varible->save();
    return redirect('/...');

    <!-- untuk update -->
    $varible = new Model::find($id);

    <!-- Kondisi Untuk Update Image (Jika Perlu) -->
    if ($request->has('image')) {
    // Hapus file lama
    File::delete('uploads/' . $varible->image);
    // mengubah nama file jadi unique
    $newNameImage = time() . '.' . $request->image->extension();
    // tempat penyimpanan image
    $request->image->move(public_path('uploads'), $newNameImage);

    $variable->image = $newNameImage;
    }
    -------------------------------------------------------------------------
    <!-- memberi alert -->
    return back()->with('pesan', 'isi pesan');
    return redirect('/...')->with('pesan', 'isi pesan');

    @if(session()->has('pesan'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('pesan') }}
    </div>
    @endif