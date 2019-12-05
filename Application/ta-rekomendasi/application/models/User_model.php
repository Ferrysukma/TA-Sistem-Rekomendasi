<?php

class User_model extends CI_model{
    public function inputNilai()
    {
        $nama = $this->input->post('nama', true);
        $pendidikan = $this->input->post('pendidikan', true);
        $jurusan = $this->input->post('jurusan', true);
        $bing = $this->input->post('bing', true);
        $bind = $this->input->post('bind', true);
        $matematika = $this->input->post('matematika', true);
        $fisika = $this->input->post('fisika', true);
        $data = [
            'nama' => $this->input->post('nama', true),
            'pendidikan' => $this->input->post('pendidikan', true),
            'jurusan' => $this->input->post('jurusan', true),
            'bing' => $this->input->post('bing', true),
            'bind' => $this->input->post('bind', true),
            'matematika' => $this->input->post('matematika', true),
            'fisika' => $this->input->post('fisika', true)
        ];
        $query = $this->db->query("SELECT * FROM raport WHERE nama = '$nama'")->result_array();
        if ($query == FALSE) {
            $this->db->insert('raport', $data);
        } else {
            $this->db->query("UPDATE raport SET pendidikan = '$pendidikan', jurusan = '$jurusan', bing = '$bing', bind = '$bind', matematika = '$matematika', fisika = '$fisika' WHERE nama = '$nama' ");
        }
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }

}