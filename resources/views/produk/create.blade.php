@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-head container-fluid" style="margin-top: 10px;">
                    <p>Tambah Data produk</p>
                </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('produk.store')}}" method="post">
                    {{ csrf_field() }}
                   <div class="form-group">
                        <label class="control-label col-sm-2">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama">
                                    @if ($errors->has('nama'))
                                        <span class="label label danger">{{ $errors->first('nama') }}</span>
                                    @endif
                        </div>
                    </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Kategori Produk</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kategori">
                            <option value="">Pilih Kateogri</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                            @if ($errors->has('kategori'))
                                <span class="label label danger">{{ $errors->first('kategori') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Qty Awal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="qty">
                            @if ($errors->has('qty'))
                                <span class="label label danger">{{ $errors->first('qty') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Harga Jual</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jual">
                            @if ($errors->has('Jual'))
                                <span class="label label danger">{{ $errors->first('Jual') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Harga Beli</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="beli">
                            @if ($errors->has('Beli'))
                                <span class="label label danger">{{ $errors->first('Beli') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
     </div>
    </div>
  </div>
</div>
@endsection