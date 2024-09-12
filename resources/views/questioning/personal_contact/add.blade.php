@extends('layout.app')

@push('css')
<style>
    .hide {
        display: none;
    }
</style>
@endpush

@section('menu')
    @php($menu = '1')
@endsection

@section('content')
<div class="section-header">
    <h1>{{ $title }}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Questioning</a></div>
        <div class="breadcrumb-item">{{ $title }}</div>
    </div>
</div>
<div class="card" >
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }} Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid" id="form_input">
                    <form id="form_personal_contact">
                        @csrf
                        <section class="section" id="section1">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tanggal Laporan Personal Contact</label>
                                    <input type="text" class="form-control datepicker" name="tanggal" value="{{ $personal_contact->tanggal ?? '' }}">
                                </div>
                                @php($user = auth()->user()->pegawai->nama_lengkap ?? '')
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama Pengawas Yang Melakukan Personal Contact</label>
                                    @if ($user && empty($personal_contact->nama_pengawas))
                                        <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options="$list_pengawas" :value="auth()->user()->pegawai->nama_lengkap ?? '' " />
                                    @else
                                        <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $personal_contact->nama_pengawas ?? '' " />
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama Karyawan Yang Dilakukan Personal Contact</label>
                                    <input type="text" class="form-control" name="nama_karyawan" value="{{ $personal_contact->nama_karyawan ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jabatan Karyawan Yang Dilakukan Personal Contact</label>
                                    <input type="text" class="form-control" name="jabatan" value="{{ $personal_contact->jabatan ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Perusahaan karyawan yang dilakukan personal contact</label>
                                    <x-select class="select2" name="perusahaan" :default="'-- Pilih Perusahaan --'" :options=" $list_perusahaan " :value=" $personal_contact->perusahaan ?? '' "/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Topik Yang Dibicarakan</label>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="topik1" name="topik" value="1" @if(!empty($personal_contact)) @if($personal_contact->topik === 1) checked @endif @endif>
                                      <label class="form-check-label" for="topik1">Topik Pribadi</label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="topik2" name="topik" value="2" @if(!empty($personal_contact)) @if($personal_contact->topik === 2) checked @endif @endif>
                                      <label class="form-check-label" for="topik2">Topik Pekerjaan</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Isi Pembahasan Atas Topik Pribadi dan atau Pekerjaan</label>
                                    <textarea class="form-control" name="isi_pembahasan_topik">{{ $personal_contact->isi_pembahasan_topik ?? '' }}</textarea>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Isi Pembahasan TTA</label>
                                    <small class="form-text text-muted">Kolom pembahasan ini khusus untuk menggali karyawan yang di konseling, apakah selama bekerja 1 bulan terakhir Ybs melakukan Tindakan Tidak Aman seperti : Tidak Menggunakan APD, Overspeed, Menggunakan Tools yang tidak standar, dll. Kolom pembahasan ini TIDAK UNTUK MEMBERI SANKSI, tetapi untuk melihat kejujuran pekerja dan untuk mencari akar masalah dari tindakan tidak aman yang dilakukan Ybs dan sering terjadi dengan tujuan untuk mencegah terjadinya pelanggaran dan kecelakaan.</small>
                                    <textarea class="form-control" name="isi_pembahasan_tta">{{ $personal_contact->isi_pembahasan_tta ?? '' }}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kesimpulan / Nasihat Dari Hasil Pembahasan</label>
                                    <textarea class="form-control" name="kesimpulan">{{ $personal_contact->kesimpulan ?? '' }}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                {{-- <button class="btn btn-primary mr-1 next-button" >next</button> --}}
                                <a class="btn btn-primary mr-1 text-white next" data-next="#section2">Next</a>
                            </div>
                        </section>
                        <section class="section" id="section2" style="display: none">    
                            <h4>Lembar Validasi</h4>
                            <h5>Pernyataan Validasi ini sebagai pengganti tandatangan pada form hardcopy</h5>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Pengawas benar telah melakukan personal contact terhadap karyawan di atas.</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_personal_contact" id="is_personal_contact1" value="1" @if(!empty($personal_contact)) @if($personal_contact->is_personal_contact === 1) checked @endif @endif>
                                        <label class="form-check-label" for="is_personal_contact1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_personal_contact" id="is_personal_contact2" value="2" @if(!empty($personal_contact)) @if($personal_contact->is_personal_contact === 2) checked @endif @endif>
                                        <label class="form-check-label" for="is_personal_contact2">
                                            TIDAK
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Karyawan yang dilakukan personal contact telah memahami, mengerti dan menyetujui atas kesimpulan yang telah disepakati bersama dengan pengawas !</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_persetujuan" id="is_persetujuan1" value="1" @if(!empty($personal_contact)) @if($personal_contact->is_persetujuan === 1) checked @endif @endif>
                                        <label class="form-check-label" for="is_persetujuan1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_persetujuan" id="is_persetujuan2" value="2" @if(!empty($personal_contact)) @if($personal_contact->is_persetujuan === 2) checked @endif @endif>
                                        <label class="form-check-label" for="is_persetujuan2">
                                            TIDAK
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <a class="btn btn-danger text-white back" data-back="#section1">Back</a>
                                    <button class="btn btn-primary mr-1" type="submit" id="button_submit_personal_contact">Submit</button>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
                <div id="detail"> </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    init_form_element();

    $(document).ready(function(){

        $('.next').click(function() {
            var nextSection = $(this).data('next');
            $(this).closest('.section').hide();
            $(nextSection).show();
        });

        $('.back').click(function() {
            var backSection = $(this).data('back');
            $(this).closest('.section').hide();
            $(backSection).show();
        });

    });

    let init_form_personal_contact = (id = '') =>{
        let $form_personal_contact = $('#form_personal_contact'),
            $button_submit_personal_contact = $('#button_submit_personal_contact');
            $form_personal_contact.submit((e) => {
                e.preventDefault();
                let dataForm = new FormData($form_personal_contact.get(0));
                let url = '{{ route($active_route) }}';
                if (id !== '') {
                    url += ('/' + id);
                    dataForm.append('_method', 'PUT');
                }
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: dataForm,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: (response) => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Data Personal Contact Has Been Saved.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            detail_personal_contact(response.id);
                        });
                    },
                    error: (xhr) => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            footer: xhr.responseText
                        });
                    }
                });
            });
    }

    let detail_personal_contact = (id = '') => {
        let url = "{{ route($active_route) }}/"+id;

        $.get(url, (result) => {
            $('#form_input').hide();
            $('#form_input').html('');
            $('#detail').html(result);
        }).fail((xhr) => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: xhr.responseText
            });
        });
    }

    init_form_personal_contact({{ $personal_contact->id ?? '' }})
</script>
@endpush