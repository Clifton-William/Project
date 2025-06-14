<?php

namespace App\Livewire;

use App\Models\User;

use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;


class MemberComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $nama, $telepon, $email, $alamat, $password, $cari, $id;
    public function render()
    {
        if($this->cari !="") {
            $data['member'] = User::Where('nama', 'like', '%'. $this->cari . '%')
            ->paginate(10);
        }
        else{
            $data['member'] = User::where('jenis', 'member')->paginate(10);
        }

        $layout['title'] = 'Kelola Member';
        return view('livewire.member-component', $data)->layoutData($layout);
    }
    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ],[
            'nama.required' => 'Nama Lengkap Tidak Boleh Kosong!',
            'telepon.required' => 'Telepon TIdak Boleh Kosong!',
            'email.required' => 'Email Tidak Boleh kosong!',
            'alamt.required' => 'Alamat Tidak Boleh Koson!'
        ]);
        User::create([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'telepon' => $this->telepon,
            'email' => $this->email,
            'jenis' => 'member '
        ]);
        session()->flash('success', 'Berhasil Simpan');
        return redirect()->route('member');
    }
    public function edit($id)
    {
        $member = User::find($id);
        $this->id = $member->id;
        $this->nama = $member->nama;
        $this->alamat = $member->alamat;
        $this->telepon = $member->telepon;
        $this->email = $member->email;
    }
    public function update()
    {
        $member = User::find($this->id);
        $member->update([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'telepon' => $this->telepon,
            'email' => $this->email,
            'jenis' => 'member '
        ]);
        session()->flash('success', 'Berhasil Ubah!');
        return redirect()->route('member');
    }
    public function confirm($id)
    {
        $this->id = $id;
    }
    public function destroy()
    {
        $member = User::find($this->id);
        $member->delete();
        session()->flash('success','Berhasil Hapus!');
        return redirect()->route('member');
    }
}
